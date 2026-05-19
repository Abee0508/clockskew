<?php
$pageTitle = "Clock Skew Software Solutions | Web Design, Development & Database Experts";
$pageDesc = "We design, build and deploy fast, scalable websites and web apps with custom backends and databases. Boutique software studio for ambitious brands.";
$activePage = "home";
include 'includes/header.php';
?>

<!-- Hero -->
<section class="cs-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 reveal-l">
        <span class="badge-pill"><i class="fa-solid fa-bolt"></i> Boutique Software Studio</span>
        <h1>Software, perfectly <span class="grad">in&nbsp;sync</span> with your business.</h1>
        <p class="lead">We craft pixel-precise websites, robust backends and elegant databases — engineered end-to-end so your product runs without a beat out of place.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="services.php" class="btn btn-cs">Explore Services <i class="fa-solid fa-arrow-right"></i></a>
          <a href="portfolio.php" class="btn btn-outline-cs">View Our Work</a>
        </div>
      </div>
      <div class="col-lg-5 reveal-r">
        <div class="cs-hero-visual text-center">
          <img src="images/logo.png" alt="Clock Skew Logo" style="max-width:360px">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Preview -->
<section class="cs-section">
  <div class="container">
    <div class="cs-section-title reveal">
      <span class="eyebrow">What we do</span>
      <h2>End-to-end engineering, under one roof</h2>
      <p>From the first wireframe to the production database — every layer of your product handled by the same team.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 reveal">
        <div class="cs-card">
          <div class="ico"><i class="fa-solid fa-pen-ruler"></i></div>
          <h4>Website Design</h4>
          <p>Conversion-driven interfaces shaped around your brand, your users and your numbers.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="cs-card">
          <div class="ico"><i class="fa-solid fa-laptop-code"></i></div>
          <h4>Frontend Development</h4>
          <p>Hand-coded, responsive frontends built with semantic HTML, modern CSS and clean JS.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="cs-card">
          <div class="ico"><i class="fa-solid fa-server"></i></div>
          <h4>Backend & APIs</h4>
          <p>Reliable server-side logic, authentication and REST APIs that scale with your traffic.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="cs-card">
          <div class="ico"><i class="fa-solid fa-database"></i></div>
          <h4>Database Design</h4>
          <p>Thoughtful schemas, indexes and queries — engineered for speed, integrity and growth.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="cs-section pt-0">
  <div class="container">
    <div class="cs-stats reveal">
      <div class="row text-center g-4 position-relative" style="z-index:1">
        <div class="col-6 col-md-3"><div class="cs-stat-num" data-count="42" data-suffix="+">0</div><div class="cs-stat-label">Projects Delivered</div></div>
        <div class="col-6 col-md-3"><div class="cs-stat-num" data-count="28" data-suffix="+">0</div><div class="cs-stat-label">Happy Clients</div></div>
        <div class="col-6 col-md-3"><div class="cs-stat-num" data-count="6" data-suffix="+">0</div><div class="cs-stat-label">Years in Code</div></div>
        <div class="col-6 col-md-3"><div class="cs-stat-num" data-count="99" data-suffix="%">0</div><div class="cs-stat-label">On-Time Delivery</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Preview -->
<section class="cs-section pt-0">
  <div class="container">
    <div class="cs-section-title reveal">
      <span class="eyebrow">Selected Work</span>
      <h2>Products we're proud of</h2>
      <p>A small slice of recent builds — each one shipped with custom code and a custom database.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="cs-project">
          <img src="images/project1.jpg" alt="Northwind Bazaar">
          <div class="always"><span>E-Commerce</span><h5>Northwind Bazaar</h5></div>
          <div class="overlay"><span class="tag">E-Commerce</span><h5>Northwind Bazaar</h5><p style="color:#cdd9ef;font-size:.88rem">Multi-vendor storefront with Stripe checkout and inventory dashboard.</p></div>
        </div>
      </div>
      <div class="col-md-4 reveal">
        <div class="cs-project">
          <img src="images/project2.jpg" alt="Pulse Analytics">
          <div class="always"><span>SaaS Dashboard</span><h5>Pulse Analytics</h5></div>
          <div class="overlay"><span class="tag">SaaS Dashboard</span><h5>Pulse Analytics</h5><p style="color:#cdd9ef;font-size:.88rem">Realtime KPI dashboard for a logistics startup, ~12k MAU.</p></div>
        </div>
      </div>
      <div class="col-md-4 reveal">
        <div class="cs-project">
          <img src="images/project3.jpg" alt="Saffron Table">
          <div class="always"><span>Booking Platform</span><h5>Saffron Table</h5></div>
          <div class="overlay"><span class="tag">Booking Platform</span><h5>Saffron Table</h5><p style="color:#cdd9ef;font-size:.88rem">Restaurant reservation system with table-management backend.</p></div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 reveal">
      <a href="portfolio.php" class="btn btn-outline-cs">See full portfolio <i class="fa-solid fa-arrow-right ms-1"></i></a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-section pt-0">
  <div class="container">
    <div class="cs-stats text-center reveal" style="background:linear-gradient(135deg,#00d4ff 0%,#0a1f44 100%)">
      <div style="position:relative;z-index:1">
        <h2 style="color:#fff">Have a project on the runway?</h2>
        <p style="color:#dfeefb;max-width:560px;margin:.6rem auto 1.6rem">Tell us about your idea — we'll respond within one business day with a clear scope and timeline.</p>
        <a href="contact.php" class="btn btn-cs" style="background:#fff;color:#0a1f44!important">Start a project <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
