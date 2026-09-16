<?php
/**
 * includes/header.php
 *
 * Renders <head> plus the top navigation. Every page sets $pageTitle and
 * $pageDescription (and optionally $bodyClass) BEFORE including this file.
 *
 * Example, at the top of about.php:
 *   $pageTitle = 'About Us';
 *   $pageDescription = 'Learn about Vexcon Resources Limited.';
 *   require __DIR__ . '/includes/header.php';
 */

declare(strict_types=1);

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/icons.php';

$pageTitle = $pageTitle ?? SITE_NAME;
$pageDescription = $pageDescription ?? SITE_TAGLINE;
$bodyClass = $bodyClass ?? '';
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= vx_e($pageTitle) ?> | <?= vx_e(SITE_NAME) ?></title>
<meta name="description" content="<?= vx_e($pageDescription) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="assets/img/favicon.png">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?= vx_e($bodyClass) ?>">

<header id="site-header">
  <div class="wrap nav">
    <a href="index.php" class="brand" aria-label="<?= vx_e(SITE_NAME) ?> home">
      <img src="assets/img/logo.png" alt="<?= vx_e(SITE_NAME) ?> logo" class="brand-mark">
      <span class="brand-text">
        <strong><?= vx_e(strtoupper(SITE_SHORT_NAME)) ?></strong>
        <span>RESOURCES LIMITED</span>
      </span>
    </a>

    <nav class="links" aria-label="Primary">
      <?php foreach ($GLOBALS['nav_links'] as $href => $label): ?>
        <a href="<?= vx_e($href) ?>" <?= $href === $currentPage ? 'aria-current="page" class="is-active"' : '' ?>><?= vx_e($label) ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="nav-cta">
      <a href="quote.php" class="btn btn-primary">Request a Quote</a>
    </div>

    <button class="burger" id="burger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-panel">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<div class="mobile-panel" id="mobile-panel">
  <?php foreach ($GLOBALS['nav_links'] as $href => $label): ?>
    <a href="<?= vx_e($href) ?>" <?= $href === $currentPage ? 'aria-current="page"' : '' ?>><?= vx_e($label) ?></a>
  <?php endforeach; ?>
  <a href="quote.php" class="btn btn-primary btn-block">Request a Quote</a>
</div>

<main>
