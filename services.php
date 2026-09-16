<?php
declare(strict_types=1);

$pageTitle = 'Our Core Services';
$pageDescription = 'Diesel supply, Oil & Gas supply, logistics, procurement, distribution and supply solutions from Vexcon Resources Limited.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <span>Services</span></div>
    <h1>Our Core Services</h1>
    <p>End-to-end Oil &amp; Gas supply support — from sourcing and procurement through transport and delivery.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap">
    <div class="services-grid">

      <div class="service-card">
        <?= vx_icon('diesel', 'service-icon') ?>
        <h3>Diesel Supply</h3>
        <p>Reliable supply of diesel for commercial, industrial, corporate, construction, transportation and operational requirements.</p>
        <a class="service-link" href="diesel-supply.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card" id="oil-gas">
        <?= vx_icon('oilgas', 'service-icon') ?>
        <h3>Oil &amp; Gas Supply</h3>
        <p>Supply and sourcing solutions for petroleum products and other Oil &amp; Gas related requirements based on client needs.</p>
        <a class="service-link" href="oil-gas-supply.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card" id="logistics">
        <?= vx_icon('logistics', 'service-icon') ?>
        <h3>Logistics</h3>
        <p>Efficient transportation, movement, coordination and delivery of petroleum products and supplies.</p>
        <a class="service-link" href="logistics.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card" id="procurement">
        <?= vx_icon('procurement', 'service-icon') ?>
        <h3>Procurement</h3>
        <p>Professional procurement and sourcing of petroleum products, equipment, materials and other required resources.</p>
        <a class="service-link" href="procurement.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card" id="distribution">
        <?= vx_icon('distribution', 'service-icon') ?>
        <h3>Distribution</h3>
        <p>Reliable distribution solutions that help clients receive required products efficiently and on schedule.</p>
        <a class="service-link" href="quote.php">Request this service <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card" id="supply-solutions">
        <?= vx_icon('supply', 'service-icon') ?>
        <h3>Supply Solutions</h3>
        <p>End-to-end supply support for businesses and organizations requiring dependable products and resources.</p>
        <a class="service-link" href="quote.php">Request this service <?= vx_icon('arrow-right') ?></a>
      </div>

      <div class="service-card" id="contracting">
        <?= vx_icon('contracting', 'service-icon') ?>
        <h3>Contracting</h3>
        <p>Contracting support for Oil &amp; Gas pipeline works, fabrication, and related supplies.</p>
        <a class="service-link" href="contracting.php">Learn more <?= vx_icon('arrow-right') ?></a>
      </div>

    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Not sure which service you need?</h2>
      <p style="margin-top:10px; max-width:50ch;">Tell us about your operation and we'll recommend the right solution.</p>
    </div>
    <a href="quote.php" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
