# Vexcon Resources Limited — Website

A multi-page corporate website for Vexcon Resources Limited (Oil & Gas supply,
diesel, logistics and procurement), built with plain PHP, HTML and CSS —
no framework, no build step.

## Project structure

```
vexcon-resources/
├── index.php              Home page
├── about.php               About Us page
├── services.php            Services overview page
├── diesel-supply.php       Diesel Supply page
├── oil-gas-supply.php      Oil & Gas Supply page
├── logistics.php           Logistics & Distribution page
├── procurement.php         Procurement page
├── quote.php                Request a Quote page (real PHP form)
├── contact.php              Contact page
├── process-form.php         Handles the quote form submission
├── config.php                Site-wide settings (name, email, phone, nav)
├── includes/
│   ├── header.php           Shared <head> + top navigation
│   ├── footer.php           Shared footer + script tag
│   └── icons.php             Shared SVG icon library
├── assets/
│   ├── css/style.css         All styling, organized into numbered sections
│   └── js/main.js             Header scroll state, mobile menu, form UX
├── data/
│   └── quote-submissions.log  Created automatically; every quote request
│                               is appended here as one JSON line
└── .gitignore
```

Every page follows the same three-part pattern:

```php
<?php
$pageTitle = '...';
$pageDescription = '...';
require __DIR__ . '/includes/header.php';
?>

... page content ...

<?php require __DIR__ . '/includes/footer.php'; ?>
```

This keeps the `<head>`, navigation and footer in one place instead of
duplicated across every page.

## How the "Request a Quote" form works

1. `quote.php` renders the form and posts to `process-form.php`.
2. `process-form.php` validates the required fields, rejects obvious bots
   via a hidden honeypot field, and:
   - appends the enquiry to `data/quote-submissions.log`, and
   - attempts to email the team at the address set in `config.php`
     (`QUOTE_RECIPIENT_EMAIL`) using PHP's built-in `mail()` function.
3. The visitor is redirected back to `quote.php` with `?sent=1` on success
   or `?error=1` on validation failure (the Post/Redirect/Get pattern),
   so refreshing the result page never re-submits the form.

**Note on email delivery:** PHP's `mail()` function only works if the
machine it runs on has a mail server (MTA) configured — most local
development setups do not have one out of the box, so emails may not
actually arrive while testing locally. The submission is always saved to
`data/quote-submissions.log` regardless, so no enquiry is lost. When you
deploy to a real web host, most shared hosting providers have `mail()`
already configured. If you'd rather use a transactional email service
(e.g. SMTP via PHPMailer, SendGrid, Mailgun), that can replace the
`mail()` call in `process-form.php` — the rest of the flow stays the same.

## Running the site locally in VS Code

You need PHP installed on your computer (the site will not run by simply
opening the `.php` files in a browser — they must be served by PHP).

### 1. Install PHP

- **Windows:** install PHP from [php.net/downloads](https://www.php.net/downloads)
  and add it to your PATH, or install [XAMPP](https://www.apachefriends.org/).
- **macOS:** PHP usually ships with macOS, or install via Homebrew:
  `brew install php`
- **Linux:** `sudo apt install php` (Debian/Ubuntu) or your distro's equivalent.

Check it worked by running in a terminal:
```
php -v
```

### 2. Open the project in VS Code

- Open VS Code.
- `File → Open Folder…` and select the `vexcon-resources` folder.
- (Optional but recommended) install the **PHP Intelephense** extension
  from the VS Code Extensions panel for autocomplete and error checking.

### 3. Start PHP's built-in development server

- In VS Code, open a terminal: `Terminal → New Terminal`.
- Make sure you're inside the `vexcon-resources` folder, then run:
```
php -S localhost:8000
```
- Keep this terminal open — it's your local web server.

### 4. View the site

- Open a browser and go to: **http://localhost:8000**
- Click through the site — every navigation link, button, and the quote
  form all point to real pages and a real PHP script.
- To stop the server, click the terminal and press `Ctrl + C`.

### 5. Editing

- Text content lives directly in each `.php` file.
- Colors, spacing and layout live in `assets/css/style.css`.
- Company name, email, and phone number live in `config.php` — change
  them once there and they update everywhere on the site.
- Adding a new page: create `your-page.php` following the same
  header/footer pattern as the other pages, then add it to the
  `$GLOBALS['nav_links']` array in `config.php` so it appears in the
  navigation automatically.

## Deploying to a live web host

Any standard PHP hosting (shared hosting, VPS, etc. with PHP 8+) will run
this site as-is — upload the whole folder to your host's public web
directory (commonly `public_html`). No database and no build step are
required.

## Deploying to Render

Render doesn't run PHP natively, so this project includes a `Dockerfile`
and `docker-entrypoint.sh` that package the site with PHP + Apache and
start it on whatever port Render assigns. You don't need to understand
Docker to use this — just follow these steps:

1. **Push this folder to a GitHub repository** (see the Git steps in the
   main conversation, or use GitHub Desktop: File → Add Local Repository →
   select this folder → Publish repository).
2. On [render.com](https://render.com), click **New +** → **Web Service**.
3. Choose **Build and deploy from a Git repository**, and connect the
   repository you just pushed to.
4. Render should detect the `Dockerfile` automatically and select
   **Docker** as the environment. If it doesn't, select it manually.
5. Leave the other settings at their defaults and click **Create Web
   Service**.
6. Wait for the build to finish (the Logs tab shows progress). When it
   says "Live", your site is reachable at the `.onrender.com` URL Render
   gives you.

**After that, updating the live site is simple:** commit and push any
change to the same GitHub repository, and Render automatically rebuilds
and redeploys it — no need to repeat the steps above.

**Two things worth knowing about running on Render specifically:**

- **Email delivery:** Render's containers don't have a mail server
  configured, so PHP's `mail()` call in `process-form.php` won't actually
  send emails there (same limitation as most cloud hosts). Every
  submission is still safely recorded in `data/quote-submissions.log`
  regardless. For real email delivery in production, swap the `mail()`
  call for a transactional email service (e.g. SMTP via PHPMailer,
  SendGrid, Mailgun, Postmark).
- **The log file doesn't persist across deploys:** Render's filesystem
  resets each time you deploy a new version, so
  `data/quote-submissions.log` will be wiped along with it. If you need
  submissions to survive deploys, add a
  [Render Disk](https://render.com/docs/disks) mounted at `/var/www/html/data`,
  or switch to emailing/storing submissions externally instead of a local
  file.
