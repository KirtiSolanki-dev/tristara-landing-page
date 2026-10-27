<?php
/**
 * Tristara IT Solutions - Front Controller & Central Router
 * Routes incoming web requests to the appropriate controllers or view templates
 */

// Define directory constants
define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/app');
define('VIEW_PATH', APP_PATH . '/Views');

// Register PSR-4 Style Autoloader
spl_autoload_register(function (string $class) {
    if (strpos($class, 'Core\\') === 0) {
        $relativeClass = substr($class, 5);
        $file = ROOT_PATH . '/core/' . str_replace('\\', '/', $relativeClass) . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }

    if (strpos($class, 'App\\') === 0) {
        $relativeClass = substr($class, 4);
        $file = ROOT_PATH . '/app/' . str_replace('\\', '/', $relativeClass) . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Get requested route URL (handles query param ?url=, path info, and CLI arguments)
if (php_sapi_name() === 'cli' && isset($argv[1])) {
    $url = (strpos($argv[1], 'url=') === 0) ? substr($argv[1], 4) : $argv[1];
} else {
    $url = $_GET['url'] ?? '';
    if (empty($url) && isset($_SERVER['PATH_INFO'])) {
        $url = $_SERVER['PATH_INFO'];
    }
}
$url = trim($url, '/');

// Redirect plain 'admin' to dashboard
if ($url === 'admin') {
    header('Location: index.php?url=admin/dashboard');
    exit;
}

// Start session for admin workflows
if (strpos($url, 'admin') === 0) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

// ==========================================
// 1. DYNAMIC CONTROLLER / API ROUTES
// ==========================================
$apiRoutes = [
    // Public API routes
    'contact/submit'               => ['controller' => 'App\Controllers\ContactController', 'action' => 'submit'],
    'api/inquiry'                  => ['controller' => 'App\Controllers\ContactController', 'action' => 'submit'],
    'api/inquiries'                => ['controller' => 'App\Controllers\ContactController', 'action' => 'submit'],

    // Admin Authentication & Dashboard
    'admin/login'                  => ['controller' => 'App\Controllers\Admin\AuthController', 'action' => 'login'],
    'admin/logout'                 => ['controller' => 'App\Controllers\Admin\AuthController', 'action' => 'logout'],
    'admin/dashboard'              => ['controller' => 'App\Controllers\Admin\DashboardController', 'action' => 'index'],

    // Admin Inquiries Operations
    'admin/inquiries'              => ['controller' => 'App\Controllers\Admin\InquiryController', 'action' => 'index'],
    'admin/inquiries/update-status'=> ['controller' => 'App\Controllers\Admin\InquiryController', 'action' => 'updateStatus'],
    'admin/inquiries/delete'       => ['controller' => 'App\Controllers\Admin\InquiryController', 'action' => 'delete'],
];

if (array_key_exists($url, $apiRoutes)) {
    $handler = $apiRoutes[$url];
    $controllerClass = $handler['controller'];
    $action = $handler['action'];

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass();
        if (method_exists($controller, $action)) {
            $controller->$action();
            exit;
        }
    }

    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => "Route handler [{$controllerClass}@{$action}] not found."]);
    exit;
}

// ==========================================
// 2. STATIC / VIEW-BASED PAGE ROUTES
// ==========================================
$pageRoutes = [
    ''             => 'home.php',
    'home'         => 'home.php',
    'about'        => 'about.php',
    'services'     => 'services.php',
    'how-it-works' => 'how-it-works.php',
    'contact'      => 'contact.php',
];

if (array_key_exists($url, $pageRoutes)) {
    $targetView = VIEW_PATH . '/pages/' . $pageRoutes[$url];
    if (file_exists($targetView)) {
        require_once $targetView;
        exit;
    }
}

// ==========================================
// 3. 404 FALLBACK
// ==========================================
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
