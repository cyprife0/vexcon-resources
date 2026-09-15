<?php
declare(strict_types=1);

$pageTitle = 'Diesel Supply';
$pageDescription = 'Dependable diesel supply solutions for businesses, organizations, facilities, equipment, and industrial operations.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <a href="services.php">Services</a> / <span>Diesel Supply</span></div>
    <h1>Dependable Diesel Supply</h1>
    <p>Consistent diesel supply solutions built around your operation's requirements.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap spotlight">
    <div class="spotlight-art" aria-hidden="true">
      <svg viewBox="0 0 460 360" fill="none">
        <rect x="40" y="60" width="140" height="180" rx="6" fill="#141b19" stroke="#c7a03e" stroke-width="2"/>
        <ellipse cx="110" cy="60" rx="70" ry="16" fill="#1b2422" stroke="#c7a03e" stroke-width="2"/>
        <ellipse cx="110" cy="240" rx="70" ry="14" fill="#0e6b4c" opacity="0.25"/>
        <line x1="60" y1="100" x2="160" y2="100" stroke="#c7a03e" stroke-width="1" opacity="0.4"/>
        <line x1="60" y1="140" x2="160" y2="140" stroke="#c7a03e" stroke-width="1" opacity="0.4"/>
        <line x1="60" y1="180" x2="160" y2="180" stroke="#c7a03e" stroke-width="1" opacity="0.4"/>
        <path d="M180 150 H230 V190 H280" stroke="#c7a03e" stroke-width="4" stroke-linecap="round" fill="none"/>
        <circle r="3.5" fill="#e6c568"><animateMotion dur="2s" repeatCount="indefinite" path="M180 150 H230 V190 H280"/></circle>
        <g transform="translate(280,150)">
          <rect x="0" y="0" width="150" height="60" rx="4" fill="#141b19" stroke="#95a19e" stroke-width="2"/>
          <rect x="150" y="16" width="50" height="44" rx="3" fill="#0e6b4c" stroke="#1fae7c" stroke-width="2"/>
          <circle cx="35" cy="66" r="14" fill="#06090a" stroke="#c7a03e" stroke-width="3"/>
          <circle cx="165" cy="66" r="14" fill="#06090a" stroke="#c7a03e" stroke-width="3"/>
          <rect x="12" y="12" width="110" height="10" fill="#c7a03e" opacity="0.8"/>
          <text x="20" y="42" fill="#e6c568" font-family="Inter" font-size="14" font-weight="700">DIESEL</text>
        </g>
        <line x1="0" y1="322" x2="460" y2="322" stroke="#1b2422" stroke-width="2"/>
      </svg>
    </div>
    <div class="spotlight-copy">
      <div class="kicker-line"><span class="bar"></span><span>DIESEL SUPPLY</span></div>
      <h1>Dependable Diesel Supply</h1>
      <p>Vexcon Resources Limited provides dependable diesel supply solutions for businesses, organizations, facilities, equipment, and industrial operations. We understand the importance of consistent energy supply and work to provide efficient solutions based on each client's requirements.</p>
      <ul class="check-list">
        <li><?= vx_icon('check-box') ?> Supply for commercial and industrial operations</li>
        <li><?= vx_icon('check-box') ?> Supply for construction and transportation needs</li>
        <li><?= vx_icon('check-box') ?> Coordinated delivery to your specified location</li>
      </ul>
      <a href="quote.php?service=diesel-supply" class="btn btn-primary">Request Diesel Supply</a>
    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Need diesel on a recurring basis?</h2>
      <p style="margin-top:10px; max-width:50ch;">Let us know your volume and delivery schedule and we'll respond with a quote.</p>
    </div>
    <a href="quote.php?service=diesel-supply" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
