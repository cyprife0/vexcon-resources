<?php
declare(strict_types=1);

$pageTitle = 'Procurement';
$pageDescription = 'Professional procurement and sourcing of petroleum products, equipment, materials and other required resources.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <a href="services.php">Services</a> / <span>Procurement</span></div>
    <h1>Professional Procurement</h1>
    <p>Sourcing handled with diligence, discipline and clear communication.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap spotlight">
    <div class="spotlight-art" aria-hidden="true">
      <svg viewBox="0 0 460 360" fill="none">
        <rect x="140" y="40" width="180" height="240" rx="8" fill="#141b19" stroke="#95a19e" stroke-width="2"/>
        <rect x="185" y="26" width="90" height="24" rx="4" fill="#1b2422" stroke="#c7a03e" stroke-width="2"/>
        <path d="M170 100l16 16 30-34" stroke="#1fae7c" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <line x1="230" y1="102" x2="290" y2="102" stroke="#95a19e" stroke-width="2"/>
        <path d="M170 150l16 16 30-34" stroke="#1fae7c" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <line x1="230" y1="152" x2="290" y2="152" stroke="#95a19e" stroke-width="2"/>
        <path d="M170 200l16 16 30-34" stroke="#c7a03e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <line x1="230" y1="202" x2="290" y2="202" stroke="#95a19e" stroke-width="2" opacity="0.4"/>
        <line x1="170" y1="230" x2="290" y2="230" stroke="#95a19e" stroke-width="2" opacity="0.4"/>
        <line x1="0" y1="320" x2="460" y2="320" stroke="#1b2422" stroke-width="2"/>
      </svg>
    </div>
    <div class="spotlight-copy">
      <div class="kicker-line"><span class="bar"></span><span>PROCUREMENT</span></div>
      <h1>Professional Procurement</h1>
      <p>Our procurement services help clients source petroleum products, materials, equipment, and other operational requirements efficiently and professionally.</p>
      <ul class="check-list">
        <li><?= vx_icon('check-box') ?> Sourcing handled to a professional standard</li>
        <li><?= vx_icon('check-box') ?> Requirements matched to the right resources</li>
        <li><?= vx_icon('check-box') ?> Clear communication throughout the process</li>
      </ul>
      <a href="quote.php?service=procurement" class="btn btn-primary">Start a Procurement Request</a>
    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Have something to procure?</h2>
      <p style="margin-top:10px; max-width:50ch;">Tell us what you're looking for and we'll take it from there.</p>
    </div>
    <a href="quote.php?service=procurement" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
