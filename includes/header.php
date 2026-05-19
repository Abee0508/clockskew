<?php
if(!isset($pageTitle)) $pageTitle = "Clock Skew Software Solutions";
if(!isset($pageDesc)) $pageDesc = "Custom website design, full-stack development & database solutions crafted by Clock Skew Software Solutions.";
if(!isset($activePage)) $activePage = "home";
$base = isset($base) ? $base : "";
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta name="author" content="Clock Skew Software Solutions">
<meta name="theme-color" content="#0a1f44">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta property="og:type" content="website">
<link rel="icon" type="image/png" href="<?php echo $base; ?>images/favicon.png">
<link rel="apple-touch-icon" href="<?php echo $base; ?>images/favicon.png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome 6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- Custom -->
<link rel="stylesheet" href="<?php echo $base; ?>css/style.css">
</head>
<body>

<!-- Preloader -->
<div id="cs-preloader"><div class="cs-loader"></div></div>

<!-- Welcome Popup -->
<div class="cs-popup-backdrop" id="cs-popup">
  <div class="cs-popup">
    <button class="close" aria-label="Close">&times;</button>
    <div class="ico"><i class="fa-solid fa-rocket"></i></div>
    <h4>Welcome to Clock Skew</h4>
    <p>Get a <strong style="color:#00d4ff">20% launch discount</strong> on your first project this month. Let's build something exceptional together.</p>
    <a href="<?php echo $base; ?>contact.php" class="btn btn-cs" id="cs-popup-close">Claim Offer <i class="fa-solid fa-arrow-right"></i></a>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top cs-navbar">
  <div class="container">
    <a class="navbar-brand" href="<?php echo $base; ?>index.php">
      <img src="<?php echo $base; ?>images/logo.png" alt="Clock Skew Software Solutions">
      <span class="brand-text">Clock Skew<span>Software Solutions</span></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#csNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="csNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link <?php echo $activePage=='home'?'active':''; ?>" href="<?php echo $base; ?>index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage=='about'?'active':''; ?>" href="<?php echo $base; ?>about.php">About</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage=='services'?'active':''; ?>" href="<?php echo $base; ?>services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage=='portfolio'?'active':''; ?>" href="<?php echo $base; ?>portfolio.php">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage=='pricing'?'active':''; ?>" href="<?php echo $base; ?>pricing.php">Pricing</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage=='contact'?'active':''; ?>" href="<?php echo $base; ?>contact.php">Contact</a></li>
        <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
          <a class="btn btn-cs btn-sm" href="<?php echo $base; ?>contact.php">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
