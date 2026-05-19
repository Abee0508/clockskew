<?php
$pageTitle = "Portfolio | Clock Skew Software Solutions";
$pageDesc = "Selected projects designed and engineered by Clock Skew Software Solutions.";
$activePage = "portfolio";
include 'includes/header.php';
?>

<section class="cs-section" style="padding-top:140px">
  <div class="container">
    <div class="cs-section-title reveal">
      <span class="eyebrow">Our Portfolio</span>
      <h2>Recent work, real outcomes</h2>
      <p>Every project here was designed, coded and deployed by our team — start to finish.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4 reveal">
        <div class="cs-project">
          <img src="images/project1.jpg" alt="Northwind Bazaar">
          <div class="always"><span>E-Commerce Platform</span><h5>Northwind Bazaar</h5></div>
          <div class="overlay">
            <span class="tag">E-Commerce</span>
            <h5>Northwind Bazaar</h5>
            <p style="color:#cdd9ef;font-size:.88rem">A multi-vendor storefront with custom checkout, inventory dashboard and Stripe payouts. Doubled their conversion rate in 90 days.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 reveal">
        <div class="cs-project">
          <img src="images/project2.jpg" alt="Pulse Analytics">
          <div class="always"><span>SaaS Dashboard</span><h5>Pulse Analytics</h5></div>
          <div class="overlay">
            <span class="tag">SaaS</span>
            <h5>Pulse Analytics</h5>
            <p style="color:#cdd9ef;font-size:.88rem">Realtime KPI dashboard for a logistics startup. Handles 12k monthly users with sub-second chart loads.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 reveal">
        <div class="cs-project">
          <img src="images/project3.jpg" alt="Saffron Table">
          <div class="always"><span>Booking Platform</span><h5>Saffron Table</h5></div>
          <div class="overlay">
            <span class="tag">Hospitality</span>
            <h5>Saffron Table</h5>
            <p style="color:#cdd9ef;font-size:.88rem">Restaurant reservation system with table management, SMS confirmations and a kitchen-facing admin.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 reveal">
      <p style="color:#aebbd2">Want to see something specific? We have case studies we can't share publicly.</p>
      <a href="contact.php" class="btn btn-cs">Request case studies <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
