<?php
$pageTitle = "Contact | Clock Skew Software Solutions";
$pageDesc = "Get in touch with Clock Skew Software Solutions — we reply within one business day.";
$activePage = "contact";
session_start();
$flash = $_SESSION['cs_flash'] ?? null;
unset($_SESSION['cs_flash']);
include 'includes/header.php';
?>

<section class="cs-section" style="padding-top:140px">
  <div class="container">
    <div class="cs-section-title reveal">
      <span class="eyebrow">Get in touch</span>
      <h2>Tell us about your project</h2>
      <p>Whether it's a brand-new product, a redesign or a database rescue mission — we'd love to hear about it.</p>
    </div>

    <div class="row g-5">
      <div class="col-lg-5 reveal-l">
        <div class="cs-contact-info">
          <div class="ico"><i class="fa-solid fa-envelope"></i></div>
          <div><h6>Email</h6><span>hello@clockskew.dev</span></div>
        </div>
        <div class="cs-contact-info">
          <div class="ico"><i class="fa-solid fa-phone"></i></div>
          <div><h6>Phone</h6><span>+92 300 0000000</span></div>
        </div>
        <div class="cs-contact-info">
          <div class="ico"><i class="fa-brands fa-whatsapp"></i></div>
          <div><h6>WhatsApp</h6><span>Tap the green button (bottom-right)</span></div>
        </div>
        <div class="cs-contact-info">
          <div class="ico"><i class="fa-solid fa-clock"></i></div>
          <div><h6>Working Hours</h6><span>Mon – Sat, 10:00 AM – 7:00 PM (PKT)</span></div>
        </div>
        <div class="cs-contact-info">
          <div class="ico"><i class="fa-solid fa-location-dot"></i></div>
          <div><h6>Location</h6><span>Karachi, Pakistan — remote worldwide</span></div>
        </div>
      </div>

      <div class="col-lg-7 reveal-r" id="contact-form">
        <div class="cs-card cs-form" style="padding:2.2rem 2rem">
          <h4 style="margin-bottom:1.4rem">Send us a message</h4>

          <?php if($flash): ?>
            <div class="cs-alert <?php echo $flash['ok']?'success':'error'; ?>">
              <i class="fa-solid <?php echo $flash['ok']?'fa-circle-check':'fa-circle-exclamation'; ?> me-2"></i>
              <?php echo htmlspecialchars($flash['msg']); ?>
            </div>
          <?php endif; ?>

          <form action="php/send_mail.php" method="POST" novalidate>
            <!-- honeypot -->
            <input type="text" name="website" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off">

            <div class="row g-3">
              <div class="col-md-6">
                <label>Your Name *</label>
                <input type="text" name="name" class="form-control" required maxlength="100" placeholder="Jane Doe">
              </div>
              <div class="col-md-6">
                <label>Email Address *</label>
                <input type="email" name="email" class="form-control" required maxlength="255" placeholder="jane@example.com">
              </div>
              <div class="col-md-6">
                <label>Phone (optional)</label>
                <input type="tel" name="phone" class="form-control" maxlength="40" placeholder="+92 300 0000000">
              </div>
              <div class="col-md-6">
                <label>Subject *</label>
                <input type="text" name="subject" class="form-control" required maxlength="200" placeholder="Project enquiry">
              </div>
              <div class="col-12">
                <label>Your Message *</label>
                <textarea name="message" class="form-control" rows="5" required maxlength="5000" placeholder="Tell us about your project, timeline and budget..."></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-cs">Send Message <i class="fa-solid fa-paper-plane"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
