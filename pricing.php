<?php
$pageTitle = "Pricing | Clock Skew Software Solutions";
$pageDesc = "Transparent pricing for websites, web apps and custom backends — pick a plan or get a custom quote.";
$activePage = "pricing";
include 'includes/header.php';
?>

<section class="cs-section" style="padding-top:140px">
  <div class="container">
    <div class="cs-section-title reveal">
      <span class="eyebrow">Pricing</span>
      <h2>Honest plans, no surprise invoices</h2>
      <p>Pick a starting point — every plan can be tailored to your exact scope on a quick call.</p>
    </div>

    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-4 reveal">
        <div class="cs-price">
          <h4>Starter</h4>
          <p style="color:#8b9bb4;font-size:.92rem">Ideal for personal sites & small businesses</p>
          <div class="price">$299<small>/project</small></div>
          <ul>
            <li>Up to 5 responsive pages</li>
            <li>Custom design & branding</li>
            <li>Contact form + email setup</li>
            <li>Basic SEO setup</li>
            <li>30 days post-launch support</li>
            <li class="no">Custom backend</li>
            <li class="no">Database integration</li>
          </ul>
          <a href="contact.php" class="btn btn-outline-cs w-100">Get Started</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 reveal">
        <div class="cs-price featured">
          <h4>Business</h4>
          <p style="color:#cdd9ef;font-size:.92rem">For growing brands needing real functionality</p>
          <div class="price">$799<small>/project</small></div>
          <ul>
            <li>Up to 12 responsive pages</li>
            <li>Premium UI/UX design</li>
            <li>Custom PHP backend</li>
            <li>MySQL database setup</li>
            <li>Admin dashboard</li>
            <li>Advanced SEO & analytics</li>
            <li>90 days post-launch support</li>
          </ul>
          <a href="contact.php" class="btn btn-cs w-100">Choose Business</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 reveal">
        <div class="cs-price">
          <h4>Enterprise</h4>
          <p style="color:#8b9bb4;font-size:.92rem">For SaaS, marketplaces & complex platforms</p>
          <div class="price">Custom</div>
          <ul>
            <li>Unlimited pages & modules</li>
            <li>Full UX research & design system</li>
            <li>Scalable full-stack architecture</li>
            <li>PostgreSQL / MongoDB setup</li>
            <li>Payments, auth, third-party APIs</li>
            <li>CI/CD & cloud deployment</li>
            <li>Dedicated retainer support</li>
          </ul>
          <a href="contact.php" class="btn btn-outline-cs w-100">Talk to Sales</a>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 reveal" style="color:#8b9bb4">
      <p>Need a one-off task or a maintenance retainer? <a href="contact.php">Drop us a line</a> — we'll quote it within a day.</p>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
