<?php
$pageTitle = "About | Clock Skew Software Solutions";
$pageDesc = "Meet Clock Skew — a small, senior team building tailored software for founders and growing businesses.";
$activePage = "about";
include 'includes/header.php';
?>

<section class="cs-section" style="padding-top:140px">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal-l">
        <span class="badge-pill" style="display:inline-flex;align-items:center;gap:.5rem;padding:.45rem 1rem;border-radius:50px;background:rgba(0,212,255,.1);border:1px solid rgba(0,212,255,.3);color:#00d4ff;font-size:.85rem;font-weight:500;margin-bottom:1rem">
          <i class="fa-solid fa-users"></i> Who we are
        </span>
        <h2 style="color:#fff;font-size:clamp(1.9rem,3.5vw,2.7rem)">A small team that ships serious software.</h2>
        <p style="color:#aebbd2;font-size:1.05rem;line-height:1.75">Clock Skew Software Solutions is a boutique studio of designers, engineers and database craftspeople. We partner with founders, agencies and in-house teams to deliver web products that look sharp, perform under load and don't fall apart six months in.</p>
        <p style="color:#aebbd2">We don't outsource, we don't recycle templates, and we don't disappear after launch. Every line of code is written in-house and every project gets a senior set of eyes from day one.</p>
      </div>
      <div class="col-lg-6 reveal-r">
        <div class="cs-about-img">
          <img src="images/hero-bg.jpg" alt="Our workspace" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cs-section pt-0">
  <div class="container">
    <div class="cs-section-title reveal">
      <span class="eyebrow">Why teams pick us</span>
      <h2>Built on four non-negotiables</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal">
        <div class="cs-feature">
          <div class="ico"><i class="fa-solid fa-shield-halved"></i></div>
          <div><h6>Engineered, not assembled</h6><p>Custom code over plugins. We write what your product needs, not what a template happened to ship with.</p></div>
        </div>
        <div class="cs-feature">
          <div class="ico"><i class="fa-solid fa-gauge-high"></i></div>
          <div><h6>Performance is a feature</h6><p>Lighthouse scores, query plans and bundle sizes get the same attention as visual polish.</p></div>
        </div>
      </div>
      <div class="col-md-6 reveal">
        <div class="cs-feature">
          <div class="ico"><i class="fa-solid fa-comments"></i></div>
          <div><h6>Direct communication</h6><p>You talk to the people building your product — not a relay of account managers.</p></div>
        </div>
        <div class="cs-feature">
          <div class="ico"><i class="fa-solid fa-handshake-angle"></i></div>
          <div><h6>Long-term partnership</h6><p>Post-launch care, iterations and on-call support so your product keeps moving after day one.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cs-section pt-0">
  <div class="container">
    <div class="cs-section-title reveal">
      <span class="eyebrow">How we work</span>
      <h2>A simple four-step process</h2>
    </div>
    <div class="row g-4">
      <?php $steps = [
        ['01','Discover','Scope, goals and success metrics — we listen before we code.','fa-magnifying-glass'],
        ['02','Design','Wireframes and high-fidelity UI tailored to your brand and users.','fa-pen-ruler'],
        ['03','Build','Frontend, backend and database — built, tested and reviewed in sprints.','fa-code'],
        ['04','Launch','Deploy, monitor and iterate. We stay around for what comes next.','fa-rocket'],
      ]; foreach($steps as $s){ ?>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="cs-card text-center">
          <div class="ico mx-auto"><i class="fa-solid <?php echo $s[3]; ?>"></i></div>
          <div style="color:#00d4ff;font-weight:700;letter-spacing:.2em;font-size:.8rem;margin-bottom:.3rem"><?php echo $s[0]; ?></div>
          <h4><?php echo $s[1]; ?></h4><p><?php echo $s[2]; ?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
