<?php
declare(strict_types=1);

$pageTitle = 'Oil & Gas Supply';
$pageDescription = 'Professional supply and sourcing solutions within the Oil & Gas sector.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <a href="services.php">Services</a> / <span>Oil &amp; Gas Supply</span></div>
    <h1>Oil &amp; Gas Supply</h1>
    <p>Professional sourcing solutions across the Oil &amp; Gas sector.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap spotlight reverse">
    <div class="spotlight-art" aria-hidden="true">
      <svg viewBox="0 0 460 360" fill="none">
        <g stroke="#95a19e" stroke-width="2" fill="none">
          <line x1="230" y1="40" x2="230" y2="200"/>
          <path d="M195 40 L230 10 L265 40"/>
          <line x1="205" y1="70" x2="255" y2="70"/>
          <line x1="200" y1="110" x2="260" y2="110"/>
          <line x1="195" y1="150" x2="265" y2="150"/>
        </g>
        <rect x="190" y="200" width="80" height="30" fill="#141b19" stroke="#c7a03e" stroke-width="2"/>
        <circle cx="230" cy="215" r="8" fill="#1fae7c" opacity="0.6"/>
        <path d="M230 230 V270 H150 V300" stroke="#c7a03e" stroke-width="4" fill="none" stroke-linecap="round"/>
        <circle r="3.5" fill="#e6c568"><animateMotion dur="2.2s" repeatCount="indefinite" path="M230 230 V270 H150 V300"/></circle>
        <rect x="90" y="300" width="120" height="40" rx="4" fill="#141b19" stroke="#1fae7c" stroke-width="2"/>
        <ellipse cx="150" cy="300" rx="60" ry="10" fill="#0e6b4c" stroke="#1fae7c" stroke-width="2"/>
        <path d="M230 230 V270 H330 V300" stroke="#c7a03e" stroke-width="4" fill="none" stroke-linecap="round"/>
        <circle r="3.5" fill="#e6c568"><animateMotion dur="2.2s" begin="1.1s" repeatCount="indefinite" path="M230 230 V270 H330 V300"/></circle>
        <rect x="290" y="300" width="80" height="35" rx="18" fill="#141b19" stroke="#c7a03e" stroke-width="2"/>
        <line x1="0" y1="340" x2="460" y2="340" stroke="rgba(255,255,255,0.08)" stroke-width="2"/>
      </svg>
    </div>
    <div class="spotlight-copy">
      <div class="kicker-line"><span class="bar"></span><span>OIL &amp; GAS SUPPLY</span></div>
      <h1>Oil &amp; Gas Supply</h1>
      <p>We provide professional supply and sourcing solutions within the Oil &amp; Gas sector, helping clients access petroleum products and related resources required for their operations.</p>
      <ul class="check-list">
        <li><?= vx_icon('check-box') ?> Sourcing based on your specific operational needs</li>
        <li><?= vx_icon('check-box') ?> Support for businesses, contractors and industrial operations</li>
        <li><?= vx_icon('check-box') ?> Coordinated supply, from request to delivery</li>
      </ul>
      <a href="quote.php?service=oil-gas-supply" class="btn btn-primary">Discuss Your Requirement</a>
    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Have an Oil &amp; Gas supply requirement?</h2>
      <p style="margin-top:10px; max-width:50ch;">Share the details and our team will get back to you with a quote.</p>
    </div>
    <a href="quote.php?service=oil-gas-supply" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
