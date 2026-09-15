<?php
declare(strict_types=1);

$pageTitle = 'Contact Us';
$pageDescription = 'Get in touch with Vexcon Resources Limited by phone, email, or by requesting a quote.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <span>Contact</span></div>
    <h1>Let's Work Together</h1>
    <p><?= vx_e(SITE_NAME) ?> — reliable Oil &amp; Gas supply, diesel, logistics, procurement and distribution.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap">
    <div class="contact-grid">
      <div class="contact-card">
        <?= vx_icon('phone') ?>
        <h4>Call Us</h4>
        <p>Speak with our team about your supply requirements.</p>
        <a class="link" href="tel:<?= vx_e(SITE_PHONE_TEL) ?>"><?= vx_e(SITE_PHONE_DISPLAY) ?></a>
      </div>
      <div class="contact-card">
        <?= vx_icon('mail') ?>
        <h4>Email Us</h4>
        <p>Send your requirements and we'll respond promptly.</p>
        <a class="link" href="mailto:<?= vx_e(SITE_EMAIL) ?>"><?= vx_e(SITE_EMAIL) ?></a>
      </div>
      <div class="contact-card">
        <?= vx_icon('quote-doc') ?>
        <h4>Request a Quote</h4>
        <p>Tell us your product, quantity and delivery location.</p>
        <a class="link" href="quote.php">Go to quote form <?= vx_icon('arrow-right') ?></a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
