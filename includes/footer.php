<?php $base = isset($base) ? $base : ""; ?>
<!-- Footer -->
<footer class="cs-footer">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <a class="navbar-brand d-inline-flex align-items-center gap-2 mb-3" href="<?php echo $base; ?>index.php">
          <img src="<?php echo $base; ?>images/logo.png" alt="Clock Skew" style="height:46px">
        </a>
        <p>A boutique software studio crafting reliable websites, full-stack applications and database-driven platforms for modern businesses.</p>
        <div class="socials mt-3">
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <h6>Company</h6>
        <ul>
          <li><a href="<?php echo $base; ?>about.php">About Us</a></li>
          <li><a href="<?php echo $base; ?>portfolio.php">Portfolio</a></li>
          <li><a href="<?php echo $base; ?>pricing.php">Pricing</a></li>
          <li><a href="<?php echo $base; ?>contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2">
        <h6>Services</h6>
        <ul>
          <li><a href="<?php echo $base; ?>services.php">Web Design</a></li>
          <li><a href="<?php echo $base; ?>services.php">Web Development</a></li>
          <li><a href="<?php echo $base; ?>services.php">Backend & API</a></li>
          <li><a href="<?php echo $base; ?>services.php">Database Design</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h6>Get in Touch</h6>
        <ul>
          <li><i class="fa-solid fa-envelope me-2" style="color:#00d4ff"></i> hello@clockskew.dev</li>
          <li><i class="fa-solid fa-phone me-2" style="color:#00d4ff"></i> +92 300 0000000</li>
          <li><i class="fa-solid fa-location-dot me-2" style="color:#00d4ff"></i> Karachi, Pakistan</li>
        </ul>
        <div class="d-flex gap-3 mt-3" style="font-size:.88rem">
          <a href="<?php echo $base; ?>privacy.php">Privacy Policy</a>
          <a href="<?php echo $base; ?>terms.php">Terms & Conditions</a>
        </div>
      </div>
    </div>
    <div class="copyright">
      &copy; <?php echo date('Y'); ?> Clock Skew Software Solutions. Crafted with precision &amp; passion.
    </div>
  </div>
</footer>

<!-- WhatsApp Float -->
<a href="https://wa.me/923000000000?text=Hi%20Clock%20Skew%2C%20I%27d%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener" class="cs-wa" aria-label="Chat on WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
</a>

<!-- jQuery + Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base; ?>js/main.js"></script>
</body>
</html>
