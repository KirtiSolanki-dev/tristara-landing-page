<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? 'Tristara IT Solutions — Academic Excellence & Assignment Assistance'; ?></title>

  <!-- Google Fonts: Inter, Plus Jakarta Sans, Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animations.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
  <div class="container">
    <a href="index.php?url=home" class="nav-logo">
      <img src="assets/images/tristara-official-logo.png" alt="Tristara IT Solutions" class="nav-logo-img">
    </a>
    <div class="nav-links">
      <a href="index.php?url=home" class="<?php echo ($currentPage ?? '') === 'home' ? 'active' : ''; ?>">Home</a>
      <a href="index.php?url=about" class="<?php echo ($currentPage ?? '') === 'about' ? 'active' : ''; ?>">About Us</a>
      <a href="index.php?url=services" class="<?php echo ($currentPage ?? '') === 'services' ? 'active' : ''; ?>">Services</a>
      <a href="index.php?url=how-it-works" class="<?php echo ($currentPage ?? '') === 'how-it-works' ? 'active' : ''; ?>">How It Works</a>
      <a href="index.php?url=contact" class="<?php echo ($currentPage ?? '') === 'contact' ? 'active' : ''; ?>">Contact</a>
    </div>

    <div class="nav-btns-group">
      <a href="https://wa.me/919313118267?text=Hi,%20I%20need%20academic%20assignment%20assistance%20from%20Tristara!" target="_blank" class="nav-btn whatsapp-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
        WhatsApp
      </a>
      <a href="index.php?url=contact" class="nav-btn hire-btn">Hire Us →</a>
    </div>

    <button class="mobile-toggle" onclick="toggleMobile()" aria-label="Toggle Navigation">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu Drawer -->
<div class="mobile-menu-overlay" id="mobileOverlay" onclick="toggleMobile()"></div>
<div class="mobile-menu" id="mobileMenu">
  <button class="mobile-close" onclick="toggleMobile()" aria-label="Close Navigation">
    <svg width="24" height="24" fill="none" stroke="#ffffff" stroke-width="2">
      <line x1="18" y1="6" x2="6" y2="18"/>
      <line x1="6" y1="6" x2="18" y2="18"/>
    </svg>
  </button>
  <a href="index.php?url=home" class="<?php echo ($currentPage ?? '') === 'home' ? 'active' : ''; ?>" onclick="toggleMobile()">Home</a>
  <a href="index.php?url=about" class="<?php echo ($currentPage ?? '') === 'about' ? 'active' : ''; ?>" onclick="toggleMobile()">About Us</a>
  <a href="index.php?url=services" class="<?php echo ($currentPage ?? '') === 'services' ? 'active' : ''; ?>" onclick="toggleMobile()">Services</a>
  <a href="index.php?url=how-it-works" class="<?php echo ($currentPage ?? '') === 'how-it-works' ? 'active' : ''; ?>" onclick="toggleMobile()">How It Works</a>
  <a href="index.php?url=contact" class="<?php echo ($currentPage ?? '') === 'contact' ? 'active' : ''; ?>" onclick="toggleMobile()">Contact</a>
  <div style="margin-top: 24px; display: flex; flex-direction: column; gap: 12px;">
    <a href="https://wa.me/919313118267?text=Hi,%20I%20need%20academic%20assignment%20assistance%20from%20Tristara!" target="_blank" class="nav-btn whatsapp-btn" style="justify-content: center;">
      WhatsApp Quote
    </a>
    <a href="index.php?url=contact" class="nav-btn hire-btn" style="justify-content: center;">Hire Us</a>
  </div>
</div>
