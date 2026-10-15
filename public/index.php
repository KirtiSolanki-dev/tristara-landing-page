<?php
/**
 * Tristara IT Solutions - Front Controller
 * Routes incoming web requests to the appropriate views/controllers
 */

// Define directory constants
define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/app');
define('VIEW_PATH', APP_PATH . '/Views');

// Get requested route URL (handles both web $_GET and CLI argument)
if (php_sapi_name() === 'cli' && isset($argv[1])) {
    $url = (strpos($argv[1], 'url=') === 0) ? substr($argv[1], 4) : $argv[1];
} else {
    $url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';
}
$url = trim($url, '/');

// Route mapping for static frontend pages
$routes = [
    '' => 'home.php',
    'home' => 'home.php',
    'about' => 'about.php',
    'services' => 'services.php',
    'how-it-works' => 'how-it-works.php',
    'contact' => 'contact.php',
];

// Check if route exists in our map
if (array_key_exists($url, $routes)) {
    $targetView = VIEW_PATH . '/pages/' . $routes[$url];
    if (file_exists($targetView)) {
        require_once $targetView;
        exit;
    }
}

// 404 Fallback
http_response_code(404);
$pageTitle = '404 - Page Not Found | Tristara IT Solutions';
$currentPage = '';
require_once VIEW_PATH . '/layouts/header.php';
?>
<section style="min-height: 60vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 120px 20px;">
  <div class="container">
    <h1 style="font-size: clamp(3rem, 6vw, 5rem); font-weight: 800; color: var(--primary, #00c2ff); margin-bottom: 20px;">404</h1>
    <h2 style="font-size: 1.8rem; font-weight: 700; color: #ffffff; margin-bottom: 15px;">Page Not Found</h2>
    <p style="color: #94a3b8; font-size: 1.1rem; max-width: 500px; margin: 0 auto 30px;">
      The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
    </p>
    <a href="index.php?url=home" class="btn-primary" style="padding: 14px 32px; font-weight: 600;">Return to Home &rarr;</a>
  </div>
</section>
<?php
require_once VIEW_PATH . '/layouts/footer.php';
?>
