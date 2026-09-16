<?php
declare(strict_types=1);

session_start();

$pageTitle = 'Request a Quote';
$pageDescription = 'Tell Vexcon Resources Limited what you need and receive a tailored quote.';
require __DIR__ . '/includes/header.php';

// Pull any flash data left behind by process-form.php, then clear it so a
// page refresh doesn't keep showing the same message/values.
$errors = $_SESSION['form_errors'] ?? [];
$old = $_SESSION['old_input'] ?? [];
unset($_SESSION['form_errors'], $_SESSION['old_input']);

$wasSent = isset($_GET['sent']);
$hadError = isset($_GET['error']);

// Map service page links (e.g. quote.php?service=diesel-supply) to a
// friendly default value for the "Product / Service Required" field.
$serviceLabels = [
    'diesel-supply'   => 'Diesel Supply',
    'oil-gas-supply'  => 'Oil & Gas Supply',
    'logistics'       => 'Logistics',
    'procurement'     => 'Procurement',
    'contracting'     => 'Contracting (Pipeline / Fabrication)',
    'production'      => 'Diesel Production',
];
$requestedService = $_GET['service'] ?? '';
$productDefault = $old['product'] ?? ($serviceLabels[$requestedService] ?? '');

/** Small helper: value to redisplay in a field after a failed submission. */
function old_value(array $old, string $key): string
{
    return vx_e($old[$key] ?? '');
}
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <span>Request a Quote</span></div>
    <h1>Tell Us What You Need</h1>
    <p>Share your product or service requirement and delivery location, and our team will respond with a tailored quote.</p>
  </div>
</section>

<section class="section band-charcoal">
  <div class="wrap">
    <div class="quote-shell">
      <div class="quote-info">
        <div>
          <div class="kicker-line"><span class="bar"></span><span>REQUEST A QUOTE</span></div>
          <h2>Get In Touch</h2>
          <p>Fill in the form and our team will get back to you with a tailored quote for your requirement.</p>
        </div>
        <div class="contact-mini">
          <a href="tel:<?= vx_e(SITE_PHONE_TEL) ?>"><?= vx_icon('phone') ?> <?= vx_e(SITE_PHONE_DISPLAY) ?></a>
          <a href="mailto:<?= vx_e(SITE_EMAIL) ?>"><?= vx_icon('mail') ?> <?= vx_e(SITE_EMAIL) ?></a>
        </div>
      </div>

      <div class="quote-form">

        <?php if ($wasSent): ?>
          <div class="alert alert-success" role="status">
            Thank you — your request has been received. We'll respond using the email or phone number you provided.
          </div>
        <?php elseif ($hadError && !empty($errors)): ?>
          <div class="alert alert-error" role="alert">
            Please correct the highlighted fields below and resubmit the form.
          </div>
        <?php endif; ?>

        <form class="vx-form" action="process-form.php" method="post" novalidate>

          <!-- Honeypot: left empty by real visitors, filled in by most bots. -->
          <div class="honeypot" aria-hidden="true">
            <label for="website">Leave this field blank</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
          </div>

          <div class="form-grid">

            <div class="field <?= isset($errors['full_name']) ? 'has-error' : '' ?>">
              <label for="full_name">Full Name <span class="req">*</span></label>
              <input type="text" id="full_name" name="full_name" value="<?= old_value($old, 'full_name') ?>" required>
              <?php if (isset($errors['full_name'])): ?><span class="field-error"><?= vx_e($errors['full_name']) ?></span><?php endif; ?>
            </div>

            <div class="field">
              <label for="company_name">Company Name</label>
              <input type="text" id="company_name" name="company_name" value="<?= old_value($old, 'company_name') ?>">
            </div>

            <div class="field <?= isset($errors['email']) ? 'has-error' : '' ?>">
              <label for="email">Email <span class="req">*</span></label>
              <input type="email" id="email" name="email" value="<?= old_value($old, 'email') ?>" required>
              <?php if (isset($errors['email'])): ?><span class="field-error"><?= vx_e($errors['email']) ?></span><?php endif; ?>
            </div>

            <div class="field <?= isset($errors['phone']) ? 'has-error' : '' ?>">
              <label for="phone">Phone Number <span class="req">*</span></label>
              <input type="tel" id="phone" name="phone" value="<?= old_value($old, 'phone') ?>" required>
              <?php if (isset($errors['phone'])): ?><span class="field-error"><?= vx_e($errors['phone']) ?></span><?php endif; ?>
            </div>

            <div class="field <?= isset($errors['product']) ? 'has-error' : '' ?>">
              <label for="product">Product / Service Required <span class="req">*</span></label>
              <input type="text" id="product" name="product" value="<?= vx_e($productDefault) ?>" required>
              <?php if (isset($errors['product'])): ?><span class="field-error"><?= vx_e($errors['product']) ?></span><?php endif; ?>
            </div>

            <div class="field">
              <label for="quantity">Quantity</label>
              <input type="text" id="quantity" name="quantity" value="<?= old_value($old, 'quantity') ?>">
            </div>

            <div class="field full <?= isset($errors['location']) ? 'has-error' : '' ?>">
              <label for="location">Delivery Location <span class="req">*</span></label>
              <input type="text" id="location" name="location" value="<?= old_value($old, 'location') ?>" required>
              <?php if (isset($errors['location'])): ?><span class="field-error"><?= vx_e($errors['location']) ?></span><?php endif; ?>
            </div>

            <div class="field full">
              <label for="message">Message</label>
              <textarea id="message" name="message"><?= old_value($old, 'message') ?></textarea>
            </div>

          </div>

          <button type="submit" class="btn btn-primary btn-block">Request a Quote</button>
          <p class="form-note">Fields marked <span class="req">*</span> are required. We'll respond using the email or phone number you provide.</p>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
