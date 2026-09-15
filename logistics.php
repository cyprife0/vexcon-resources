<?php
declare(strict_types=1);

$pageTitle = 'Logistics & Distribution';
$pageDescription = 'Efficient transportation, coordination and delivery of petroleum products and supplies.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <a href="services.php">Services</a> / <span>Logistics</span></div>
    <h1>Reliable Logistics &amp; Distribution</h1>
    <p>Our logistics and distribution solutions support the efficient movement and delivery of petroleum products and supplies, helping clients receive what they need where and when they need it.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap">
    <div class="section-head">
      <div class="kicker-line"><span class="bar"></span><span>HOW PRODUCTS MOVE</span></div>
      <h2>Source, Procure, Transport, Deliver</h2>
      <p>A coordinated flow from identifying the right source through to delivery at your location.</p>
    </div>
    <div class="flow-row">
      <div class="flow-step">
        <div class="flow-node"><?= vx_icon('source') ?></div>
        <h4>Source</h4>
        <p>Identifying reliable sources for the products a client requires.</p>
      </div>
      <div class="flow-step">
        <div class="flow-node"><?= vx_icon('check-box') ?></div>
        <h4>Procure</h4>
        <p>Professionally sourcing and securing the required products.</p>
      </div>
      <div class="flow-step">
        <div class="flow-node"><?= vx_icon('transport') ?></div>
        <h4>Transport</h4>
        <p>Coordinating efficient movement of products to their destination.</p>
      </div>
      <div class="flow-step">
        <div class="flow-node"><?= vx_icon('deliver') ?></div>
        <h4>Deliver</h4>
        <p>Delivering to the client's location, on schedule and as agreed.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Need coordinated delivery?</h2>
      <p style="margin-top:10px; max-width:50ch;">Tell us your delivery location and timeline and we'll take it from there.</p>
    </div>
    <a href="quote.php?service=logistics" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
