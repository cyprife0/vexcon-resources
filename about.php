<?php
declare(strict_types=1);

$pageTitle = 'About Us';
$pageDescription = 'Vexcon Resources Limited operates across diesel supply, Oil & Gas supply, logistics, procurement, and distribution.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <span>About Us</span></div>
    <h1>Your Trusted Oil &amp; Gas Supply Partner</h1>
    <p>Learn who we are and what we focus on.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap about-grid">
    <div class="about-art" aria-hidden="true">
      <svg viewBox="0 0 420 420" fill="none">
        <circle cx="210" cy="210" r="180" stroke="#1b2422" stroke-width="2"/>
        <circle cx="210" cy="210" r="180" stroke="#c7a03e" stroke-width="2" stroke-dasharray="4 10" opacity="0.7"/>
        <g stroke="#1fae7c" stroke-width="2.5" fill="none">
          <path d="M130 240 V150 H160 V240"/>
          <path d="M180 240 V120 H210 V240"/>
          <path d="M230 240 V170 H260 V240"/>
          <path d="M280 240 V190 H300 V240"/>
        </g>
        <line x1="110" y1="240" x2="320" y2="240" stroke="#95a19e" stroke-width="2"/>
        <path d="M110 240 C170 200 260 200 320 240" stroke="#c7a03e" stroke-width="2" fill="none" opacity="0.6"/>
        <circle cx="320" cy="240" r="5" fill="#e6c568"/>
        <circle cx="110" cy="240" r="5" fill="#e6c568"/>
      </svg>
    </div>
    <div class="about-copy">
      <div class="kicker-line"><span class="bar"></span><span>WHO WE ARE</span></div>
      <h2>Reliable, Professional, Focused on Supply</h2>
      <p>Vexcon Resources Limited is an Oil &amp; Gas supply and logistics company focused on providing dependable diesel and petroleum product supply solutions, logistics, procurement, distribution, and related services.</p>
      <p>We support businesses and organizations by helping them source, procure, transport, and receive essential energy products and supplies efficiently — with a focus on reliability, professionalism, timely delivery, quality service, and customer satisfaction.</p>
      <p>Our aim is to be a trusted partner for clients with ongoing fuel, procurement, logistics, and supply requirements, whichever sector they operate in.</p>

      <div class="pillars">
        <div class="pillar">
          <strong>Vision</strong>
          <span>To become a trusted and leading Oil &amp; Gas supply and logistics company, recognized for reliable energy solutions, efficient procurement, dependable distribution, and exceptional customer service.</span>
        </div>
        <div class="pillar">
          <strong>Mission</strong>
          <span>To provide reliable diesel, petroleum product supply, procurement, logistics, and distribution solutions that keep businesses and operations moving — delivered efficiently, professionally, and with a customer-focused approach.</span>
        </div>
        <div class="pillar">
          <strong>Focus</strong>
          <span>Diesel supply, Oil &amp; Gas supply, logistics, procurement and distribution — for businesses, organizations, contractors and industrial operations.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Have a supply requirement?</h2>
      <p style="margin-top:10px; max-width:50ch;">Get in touch and let us know what your business needs.</p>
    </div>
    <a href="quote.php" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
