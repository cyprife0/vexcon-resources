<?php
declare(strict_types=1);

$pageTitle = 'Production';
$pageDescription = 'Diesel production capability supporting consistent supply for businesses and industrial operations.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <a href="services.php">Services</a> / <span>Production</span></div>
    <h1>Diesel Production</h1>
    <p>Production capability that supports consistent, dependable diesel supply.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap spotlight reverse">
    <div class="spotlight-art" aria-hidden="true">
      <svg viewBox="0 0 460 360" fill="none">
        <line x1="20" y1="320" x2="440" y2="320" stroke="#1b2422" stroke-width="2"/>
        <rect x="60" y="220" width="60" height="100" fill="#141b19" stroke="#95a19e" stroke-width="2"/>
        <rect x="150" y="160" width="60" height="160" fill="#141b19" stroke="#1fae7c" stroke-width="2"/>
        <path d="M165 160c0-22 15-28 15-46 0 18 15 24 15 46" stroke="#1fae7c" stroke-width="2" fill="none" stroke-linejoin="round"/>
        <rect x="240" y="200" width="60" height="120" fill="#141b19" stroke="#c7a03e" stroke-width="2"/>
        <circle cx="270" cy="180" r="14" stroke="#c7a03e" stroke-width="2" fill="none"/>
        <line x1="90" y1="240" x2="90" y2="300" stroke="#95a19e" stroke-width="1.5" opacity="0.5"/>
        <line x1="180" y1="180" x2="180" y2="300" stroke="#1fae7c" stroke-width="1.5" opacity="0.5"/>
        <path d="M120 260h30M210 260h30" stroke="#c7a03e" stroke-width="3" stroke-linecap="round"/>
        <circle r="3.5" fill="#e6c568"><animateMotion dur="2s" repeatCount="indefinite" path="M120 260h30"/></circle>
        <circle r="3.5" fill="#e6c568"><animateMotion dur="2s" begin="1s" repeatCount="indefinite" path="M210 260h30"/></circle>
        <rect x="330" y="260" width="90" height="60" rx="4" fill="#141b19" stroke="#95a19e" stroke-width="2"/>
        <ellipse cx="375" cy="260" rx="45" ry="10" fill="#0e6b4c" stroke="#1fae7c" stroke-width="2"/>
      </svg>
    </div>
    <div class="spotlight-copy">
      <div class="kicker-line"><span class="bar"></span><span>PRODUCTION</span></div>
      <h1>Diesel Production</h1>
      <p>Beyond sourcing and supplying diesel, Vexcon Resources Limited also maintains diesel production capability, supporting consistent output that feeds into our supply and distribution operations for businesses, organizations, and industrial operations.</p>
      <ul class="check-list">
        <li><?= vx_icon('check-box') ?> Production capability supporting consistent supply</li>
        <li><?= vx_icon('check-box') ?> Output coordinated with our logistics and distribution</li>
        <li><?= vx_icon('check-box') ?> Backed by the same focus on quality and reliability</li>
      </ul>
      <a href="quote.php?service=production" class="btn btn-primary">Discuss Your Requirement</a>
    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Need a consistent diesel source?</h2>
      <p style="margin-top:10px; max-width:50ch;">Tell us your volume and requirements and our team will respond with a quote.</p>
    </div>
    <a href="quote.php?service=production" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
