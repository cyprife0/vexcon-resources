<?php
/**
 * process-form.php
 *
 * Single endpoint that handles the "Request a Quote" form (quote.php).
 * It never renders a page itself — it validates the submission, stores
 * it, attempts to email the team, and redirects the visitor straight
 * back to the form with a success or error message (the
 * Post/Redirect/Get pattern, so refreshing the result page never
 * re-submits the form).
 *
 * Flow:
 *   1. Reject anything that isn't a POST request.
 *   2. Reject obvious bots via the honeypot field.
 *   3. Validate required fields.
 *   4. On failure: store errors + the submitted values in the session,
 *      then redirect back to the form.
 *   5. On success: log the enquiry to /data/quote-submissions.log,
 *      attempt to email the team, then redirect back with ?sent=1.
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

session_start();

$redirectTo = 'quote.php';

// 1. Only accept POST requests -------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $redirectTo);
    exit;
}

// 2. Honeypot spam trap ----------------------------------------------------
// A hidden field named "website" that a human never sees or fills in.
// If it has a value, the request almost certainly came from a bot —
// pretend the submission succeeded and quietly drop it.
if (!empty($_POST['website'])) {
    header('Location: ' . $redirectTo . '?sent=1');
    exit;
}

// 3. Gather + validate input ------------------------------------------------
$input = [
    'full_name' => trim((string)($_POST['full_name'] ?? '')),
    'company_name' => trim((string)($_POST['company_name'] ?? '')),
    'email' => trim((string)($_POST['email'] ?? '')),
    'phone' => trim((string)($_POST['phone'] ?? '')),
    'product' => trim((string)($_POST['product'] ?? '')),
    'quantity' => trim((string)($_POST['quantity'] ?? '')),
    'location' => trim((string)($_POST['location'] ?? '')),
    'message' => trim((string)($_POST['message'] ?? '')),
];

$errors = [];

if ($input['full_name'] === '') {
    $errors['full_name'] = 'Please enter your full name.';
}
if ($input['email'] === '' || !filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}
if ($input['phone'] === '') {
    $errors['phone'] = 'Please enter a phone number.';
}
if ($input['product'] === '') {
    $errors['product'] = 'Please tell us what product or service you need.';
}
if ($input['location'] === '') {
    $errors['location'] = 'Please enter a delivery location.';
}

if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['old_input'] = $input;
    header('Location: ' . $redirectTo . '?error=1');
    exit;
}

// 4. Store the enquiry -------------------------------------------------------
// Every submission is appended to a log file as one JSON object per line.
// This keeps a permanent record even if the email below can't be delivered
// (many local/dev environments have no mail server configured).
$logLine = json_encode(array_merge($input, [
    'submitted_at' => date('c'),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
]), JSON_UNESCAPED_SLASHES);

$logDir = __DIR__ . '/data';
if (!is_dir($logDir)) {
    mkdir($logDir, 0755, true);
}
file_put_contents($logDir . '/quote-submissions.log', $logLine . PHP_EOL, FILE_APPEND | LOCK_EX);

// 5. Attempt to email the team ------------------------------------------------
$subject = 'New quote request from ' . $input['full_name'];
$body = "A new quote request was submitted on the website:\n\n"
    . "Full name: {$input['full_name']}\n"
    . "Company: {$input['company_name']}\n"
    . "Email: {$input['email']}\n"
    . "Phone: {$input['phone']}\n"
    . "Product / service required: {$input['product']}\n"
    . "Quantity: {$input['quantity']}\n"
    . "Delivery location: {$input['location']}\n"
    . "Message:\n{$input['message']}\n";

$headers = 'From: no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'vexconresources.local') . "\r\n"
    . 'Reply-To: ' . $input['email'];

// mail() requires a mail server configured on the host. It fails silently
// (returns false) on most local dev setups — the submission is still
// safely recorded in the log file above either way.
@mail(QUOTE_RECIPIENT_EMAIL, $subject, $body, $headers);

unset($_SESSION['form_errors'], $_SESSION['old_input']);
header('Location: ' . $redirectTo . '?sent=1');
exit;
