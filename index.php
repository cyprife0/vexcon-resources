<?php
declare(strict_types=1);

$pageTitle = 'Reliable Oil & Gas Supply Solutions';
$pageDescription = 'Vexcon Resources Limited provides reliable diesel supply, Oil & Gas supply, logistics, procurement and distribution solutions for businesses and industrial operations.';
require __DIR__ . '/includes/header.php';
?>

<!-- HERO ================================================================ -->
<section class="hero" id="home">
  <div class="wrap hero-grid">
    <div class="hero-copy">
      <div class="eyebrow-tag"><span class="dot"></span> Oil &amp; Gas Supply &middot; Diesel &middot; Logistics &middot; Procurement</div>
      <h1>Reliable <span class="accent">Oil &amp; Gas</span> Supply Solutions</h1>
      <p class="lead">Dependable diesel supply, petroleum products, logistics and procurement solutions designed to keep your business moving.</p>
      <div class="hero-actions">
        <a href="quote.php" class="btn btn-primary">Request a Quote</a>
        <a href="services.php" class="btn btn-ghost">Explore Our Services</a>
      </div>
      <div class="hero-stats">
        <div><strong>Diesel Supply</strong><span>Commercial &amp; industrial</span></div>
        <div><strong>Logistics</strong><span>Coordinated delivery</span></div>
        <div><strong>Procurement</strong><span>Sourced professionally</span></div>
      </div>
    </div>
    <div class="hero-art" aria-hidden="true">
      <svg viewBox="0 0 520 460" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="120" cy="330" rx="70" ry="14" fill="#0e6b4c" opacity="0.15"/>
        <rect x="60" y="230" width="120" height="100" rx="6" fill="#141b19" stroke="#c7a03e" stroke-width="2"/>
        <ellipse cx="120" cy="230" rx="60" ry="14" fill="#1b2422" stroke="#c7a03e" stroke-width="2"/>
        <rect x="110" y="196" width="20" height="34" fill="#141b19" stroke="#95a19e" stroke-width="1.5"/>
        <rect x="248" y="200" width="100" height="130" rx="6" fill="#141b19" stroke="#1fae7c" stroke-width="2"/>
        <ellipse cx="298" cy="200" rx="50" ry="12" fill="#1b2422" stroke="#1fae7c" stroke-width="2"/>
        <line x1="248" y1="240" x2="348" y2="240" stroke="#1fae7c" stroke-width="1" opacity="0.4"/>
        <line x1="248" y1="280" x2="348" y2="280" stroke="#1fae7c" stroke-width="1" opacity="0.4"/>
        <path d="M180 300 H230 V270 H248" stroke="#c7a03e" stroke-width="4" fill="none" stroke-linecap="round"/>
        <circle cx="230" cy="285" r="6" fill="#e6c568"/>
        <circle r="3.5" fill="#e6c568"><animateMotion dur="2.4s" repeatCount="indefinite" path="M180 300 H230 V270 H248"/></circle>
        <g class="hero-truck">
          <!--
            Truck fill-and-depart cycle (8s, loops forever):
              0.0s–4.0s  truck sits still, tank fills up from empty to full
              4.0s–4.4s  tank holds full for a moment
              4.4s–6.0s  truck drives off screen to the right, fully loaded
              6.0s–8.0s  truck is off screen; tank resets to empty for the next run
          -->
          <animateTransform attributeName="transform" type="translate"
            values="330,340; 330,340; 330,340; 900,340; 900,340; 900,340"
            keyTimes="0; 0.5; 0.55; 0.75; 0.751; 1"
            dur="8s" repeatCount="indefinite" calcMode="linear"/>

          <!-- Large tank body (the trailer, x 0–120) — this is what fills. -->
          <clipPath id="heroTankClip">
            <rect x="0" y="0" width="120" height="52" rx="4"/>
          </clipPath>

          <rect x="0" y="0" width="120" height="52" rx="4" fill="#141b19" stroke="#95a19e" stroke-width="2"/>
          <rect x="0" width="120" fill="#1fae7c" clip-path="url(#heroTankClip)">
            <animate attributeName="height" values="0; 52; 52; 52; 0; 0" keyTimes="0; 0.5; 0.55; 0.75; 0.751; 1" dur="8s" repeatCount="indefinite" calcMode="linear"/>
            <animate attributeName="y" values="52; 0; 0; 0; 52; 52" keyTimes="0; 0.5; 0.55; 0.75; 0.751; 1" dur="8s" repeatCount="indefinite" calcMode="linear"/>
          </rect>
          <rect x="0" y="0" width="120" height="52" rx="4" fill="none" stroke="#95a19e" stroke-width="2"/>

          <!-- Small cab (the driver's compartment, x 120–166) — stays as-is, never fills. -->
          <rect x="120" y="14" width="46" height="38" rx="3" fill="#141b19" stroke="#1fae7c" stroke-width="2"/>
          <path d="M120 14 L136 14 L150 30 L150 52 L120 52 Z" fill="#0e6b4c" opacity="0.6"/>

          <circle cx="30" cy="58" r="12" fill="#06090a" stroke="#c7a03e" stroke-width="3"/>
          <circle cx="140" cy="58" r="12" fill="#06090a" stroke="#c7a03e" stroke-width="3"/>
          <rect x="10" y="10" width="90" height="8" fill="#c7a03e" opacity="0.8"/>
        </g>
        <g opacity="0.5" stroke="#95a19e" stroke-width="1.5" fill="none">
          <path d="M420 400 L440 260 L460 400"/>
          <path d="M425 380 L455 380 M420 350 L460 350 M415 320 L465 320 M410 290 L470 290"/>
        </g>
        <line x1="0" y1="402" x2="520" y2="402" stroke="#1b2422" stroke-width="2"/>
      </svg>
    </div>
  </div>
  <div class="scroll-cue"><span>SCROLL</span><span class="stem"></span></div>
</section>

<div class="pipe-divider" aria-hidden="true">
  <svg viewBox="0 0 220 24"><line x1="0" y1="12" x2="220" y2="12" stroke="rgba(201,209,207,0.18)" stroke-width="2"/><line class="pipe-flow" x1="0" y1="12" x2="220" y2="12" stroke="#c7a03e" stroke-width="2"/><circle cx="110" cy="12" r="5" fill="#06090a" stroke="#c7a03e" stroke-width="2"/></svg>
</div>

<!-- ABOUT TEASER ========================================================= -->
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
      </svg>
    </div>
    <div class="about-copy">
      <div class="kicker-line"><span class="bar"></span><span>ABOUT VEXCON RESOURCES LIMITED</span></div>
      <h2>Your Trusted Oil &amp; Gas Supply Partner</h2>
      <p>Vexcon Resources Limited is an Oil &amp; Gas supply and logistics company focused on providing dependable diesel and petroleum product supply solutions, logistics, procurement, distribution, and related services — with a focus on reliability, professionalism, timely delivery and customer satisfaction.</p>
      <p><a href="about.php" class="btn btn-ghost" style="margin-top:8px;">Learn More About Us</a></p>
    </div>
  </div>
</section>

<!-- CORE SERVICES ======================================================== -->
<section class="section band-charcoal" id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="kicker-line"><span class="bar"></span><span>WHAT WE DO</span></div>
      <h2>Our Core Services</h2>
      <p>End-to-end Oil &amp; Gas supply support — from sourcing and procurement through transport and delivery.</p>
    </div>
    <div class="services-grid">

      <div class="service-card">
        <?= vx_icon('diesel', 'service-icon') ?>
        <h3>Diesel Supply</h3>
        <p>Reliable supply of diesel for commercial, industrial, corporate, construction, transportation and operational requirements.</p>
        <a class="service-link" href="diesel-supply.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card">
        <?= vx_icon('oilgas', 'service-icon') ?>
        <h3>Oil &amp; Gas Supply</h3>
        <p>Supply and sourcing solutions for petroleum products and other Oil &amp; Gas related requirements based on client needs.</p>
        <a class="service-link" href="oil-gas-supply.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card">
        <?= vx_icon('logistics', 'service-icon') ?>
        <h3>Logistics</h3>
        <p>Efficient transportation, movement, coordination and delivery of petroleum products and supplies.</p>
        <a class="service-link" href="logistics.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card">
        <?= vx_icon('procurement', 'service-icon') ?>
        <h3>Procurement</h3>
        <p>Professional procurement and sourcing of petroleum products, equipment, materials and other required resources.</p>
        <a class="service-link" href="procurement.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card">
        <?= vx_icon('distribution', 'service-icon') ?>
        <h3>Distribution</h3>
        <p>Reliable distribution solutions that help clients receive required products efficiently and on schedule.</p>
        <a class="service-link" href="services.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card">
        <?= vx_icon('supply', 'service-icon') ?>
        <h3>Supply Solutions</h3>
        <p>End-to-end supply support for businesses and organizations requiring dependable products and resources.</p>
        <a class="service-link" href="services.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card">
        <?= vx_icon('contracting', 'service-icon') ?>
        <h3>Contracting</h3>
        <p>Contracting support for Oil &amp; Gas pipeline works, fabrication, and related supplies.</p>
        <a class="service-link" href="contracting.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

    </div>
  </div>
</section>

<!-- WHY CHOOSE US ======================================================== -->
<section class="section band-dark" id="why">
  <div class="wrap">
    <div class="section-head">
      <div class="kicker-line"><span class="bar"></span><span>WHY VEXCON</span></div>
      <h2>Why Choose Vexcon Resources Limited?</h2>
    </div>
    <div class="why-grid">
      <div class="why-card"><span class="num">01</span><h4>Reliable Supply</h4><p>Consistent, dependable access to diesel and petroleum products.</p></div>
      <div class="why-card"><span class="num">02</span><h4>Efficient Logistics</h4><p>Coordinated transport and delivery, from source to destination.</p></div>
      <div class="why-card"><span class="num">03</span><h4>Professional Procurement</h4><p>Sourcing handled with diligence, discipline and clear communication.</p></div>
      <div class="why-card"><span class="num">04</span><h4>Timely Delivery</h4><p>Products delivered when and where your operations need them.</p></div>
      <div class="why-card"><span class="num">05</span><h4>Quality Focus</h4><p>Attention to quality across sourcing, handling and delivery.</p></div>
      <div class="why-card"><span class="num">06</span><h4>Customer Commitment</h4><p>Responsive service built around each client's requirements.</p></div>
      <div class="why-card"><span class="num">07</span><h4>Industry Focus</h4><p>Dedicated to Oil &amp; Gas supply — not a generalist trading business.</p></div>
      <div class="why-card"><span class="num">08</span><h4>Long Term Partnerships</h4><p>Working toward lasting relationships built on trust and reliability.</p></div>
    </div>
  </div>
</section>

<!-- HOW WE WORK ========================================================== -->
<section class="section band-charcoal" id="how">
  <div class="wrap">
    <div class="section-head">
      <div class="kicker-line"><span class="bar"></span><span>OUR PROCESS</span></div>
      <h2>How We Work</h2>
    </div>
    <div class="steps">
      <div class="step"><span class="step-num">01</span><h3>Understand Your Requirement</h3><p>We start by listening — understanding your product, quantity and delivery needs.</p></div>
      <div class="step"><span class="step-num">02</span><h3>Source &amp; Procure</h3><p>We identify and secure the required products through professional procurement.</p></div>
      <div class="step"><span class="step-num">03</span><h3>Coordinate Logistics</h3><p>We arrange efficient transport and coordination for timely movement.</p></div>
      <div class="step"><span class="step-num">04</span><h3>Deliver to Your Location</h3><p>We deliver to your specified location, on schedule and as agreed.</p></div>
    </div>
  </div>
</section>

<!-- CTA BANNER =========================================================== -->
<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Ready to secure your supply?</h2>
      <p style="margin-top:10px; max-width:50ch;">Tell us what you need and our team will respond with a tailored quote.</p>
    </div>
    <a href="quote.php" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
