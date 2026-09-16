<?php
declare(strict_types=1);

$pageTitle = 'Contracting';
$pageDescription = 'Contracting services for Oil & Gas pipeline works, fabrication, and related supplies.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
  <div class="wrap">
    <div class="breadcrumb"><a href="index.php">Home</a> / <a href="services.php">Services</a> / <span>Contracting</span></div>
    <h1>Pipeline Contracting &amp; Fabrication</h1>
    <p>Contracting support for Oil &amp; Gas pipeline works, fabrication, and related supplies.</p>
  </div>
</section>

<section class="section band-dark">
  <div class="wrap spotlight">
    <div class="spotlight-art" aria-hidden="true">
      <svg viewBox="0 0 460 360" fill="none">
        <path d="M40 300h380" stroke="#1b2422" stroke-width="2"/>
        <path d="M70 300V220a10 10 0 0 1 10-10h20a10 10 0 0 1 10 10v80" stroke="#95a19e" stroke-width="2.5" fill="none"/>
        <path d="M150 300V160a10 10 0 0 1 10-10h20a10 10 0 0 1 10 10v140" stroke="#1fae7c" stroke-width="2.5" fill="none"/>
        <path d="M230 300V120a10 10 0 0 1 10-10h20a10 10 0 0 1 10 10v180" stroke="#c7a03e" stroke-width="2.5" fill="none"/>
        <path d="M310 300V180a10 10 0 0 1 10-10h20a10 10 0 0 1 10 10v120" stroke="#95a19e" stroke-width="2.5" fill="none"/>
        <circle cx="90" cy="90" r="26" stroke="#c7a03e" stroke-width="2.5" fill="none"/>
        <path d="M74 74l-10-10M106 74l10-10M74 106l-10 10" stroke="#c7a03e" stroke-width="2" stroke-linecap="round"/>
        <rect x="360" y="240" width="70" height="60" rx="3" fill="#141b19" stroke="#1fae7c" stroke-width="2"/>
        <line x1="370" y1="255" x2="420" y2="255" stroke="#1fae7c" stroke-width="1.5" opacity="0.5"/>
        <line x1="370" y1="270" x2="420" y2="270" stroke="#1fae7c" stroke-width="1.5" opacity="0.5"/>
        <line x1="370" y1="285" x2="420" y2="285" stroke="#1fae7c" stroke-width="1.5" opacity="0.5"/>
      </svg>
    </div>
    <div class="spotlight-copy">
      <div class="kicker-line"><span class="bar"></span><span>CONTRACTING</span></div>
      <h1>Pipeline Contracting, Fabrication &amp; Supplies</h1>
      <p>Alongside our supply and logistics services, Vexcon Resources Limited also provides contracting support for Oil &amp; Gas pipeline works, fabrication, and related supplies — helping clients who need dependable execution on projects, not just product supply.</p>
      <ul class="check-list">
        <li><?= vx_icon('check-box') ?> Oil &amp; Gas pipeline contracting</li>
        <li><?= vx_icon('check-box') ?> Fabrication support and related works</li>
        <li><?= vx_icon('check-box') ?> Supplies to support contracted projects</li>
      </ul>
      <a href="quote.php?service=contracting" class="btn btn-primary">Discuss a Contracting Project</a>
    </div>
  </div>
</section>

<section class="section-tight band-emerald">
  <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap;">
    <div>
      <h2 style="font-size:clamp(26px,3vw,36px);">Have a pipeline or fabrication project?</h2>
      <p style="margin-top:10px; max-width:50ch;">Tell us the scope and requirements and our team will get back to you.</p>
    </div>
    <a href="quote.php?service=contracting" class="btn btn-primary">Request a Quote</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
