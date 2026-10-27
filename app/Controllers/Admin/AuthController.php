<?php
namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\User;

/**
 * Tristara IT Solutions - Admin Authentication Controller
 */
class AuthController extends Controller {

    /**
     * Show login form or process login POST
     */
    public function login(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // If already logged in, redirect to dashboard
        if (!empty($_SESSION['admin_user'])) {
            header('Location: index.php?url=admin/dashboard');
            exit;
        }

        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = $this->getPost();
            $username = trim($post['username'] ?? '');
            $password = trim($post['password'] ?? '');

            if (empty($username) || empty($password)) {
                $error = 'Please enter both username and password.';
            } else {
                $userModel = new User();
                $user = $userModel->findByUsername($username);

                if ($user && $userModel->verifyPassword($password, $user['password'])) {
                    // Regenerate session ID for security
                    session_regenerate_id(true);
                    $_SESSION['admin_user'] = [
                        'id'       => $user['id'],
                        'name'     => $user['name'],
                        'username' => $user['username'],
                        'email'    => $user['email'],
                        'role'     => $user['role'],
                    ];

                    header('Location: index.php?url=admin/dashboard');
                    exit;
                } else {
                    $error = 'Invalid credentials. Please verify your username and password.';
                }
            }
        }

        $this->view('admin/login', [
            'pageTitle' => 'Admin Login — Tristara IT Solutions',
            'error'     => $error
        ]);
    }

    /**
     * Log user out and destroy session
     */
    public function logout(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();

        header('Location: index.php?url=admin/login');
        exit;
    }
}
