<?php
/**
 * includes/footer.php
 *
 * Closes </main>, renders the footer, and loads the shared JS file.
 * Included at the bottom of every page.
 */
declare(strict_types=1);
?>
</main>

<footer>
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="brand">
          <svg class="brand-mark" viewBox="0 0 48 48" fill="none" aria-hidden="true"><polygon points="24,3 43,14 43,34 24,45 5,34 5,14" stroke="#c7a03e" stroke-width="2"/><path d="M14 30 L24 12 L34 30 Z" stroke="#1fae7c" stroke-width="2.2" fill="none" stroke-linejoin="round"/><circle cx="24" cy="26" r="2.6" fill="#e6c568"/></svg>
          <span class="brand-text"><strong><?= vx_e(strtoupper(SITE_SHORT_NAME)) ?></strong><span>RESOURCES LIMITED</span></span>
        </a>
        <p>Reliable Oil &amp; Gas supply, diesel, logistics, procurement, and distribution solutions.</p>
      </div>

      <div class="footer-col">
        <h5>Company</h5>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Services</h5>
        <ul>
          <li><a href="diesel-supply.php">Diesel Supply</a></li>
          <li><a href="oil-gas-supply.php">Oil &amp; Gas</a></li>
          <li><a href="logistics.php">Logistics</a></li>
          <li><a href="procurement.php">Procurement</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Contact</h5>
        <ul>
          <li><a href="tel:<?= vx_e(SITE_PHONE_TEL) ?>"><?= vx_e(SITE_PHONE_DISPLAY) ?></a></li>
          <li><a href="mailto:<?= vx_e(SITE_EMAIL) ?>"><?= vx_e(SITE_EMAIL) ?></a></li>
          <li><a href="quote.php">Request a Quote</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> <?= vx_e(SITE_NAME) ?>. All Rights Reserved.</span>
      <span>Oil &amp; Gas Supply &middot; Diesel &middot; Logistics &middot; Procurement</span>
    </div>
  </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
