<?php
namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\Inquiry;

/**
 * Tristara IT Solutions - Admin Dashboard Controller
 */
class DashboardController extends Controller {

    protected function checkAuth(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (empty($_SESSION['admin_user'])) {
            header('Location: index.php?url=admin/login');
            exit;
        }
    }

    /**
     * Dashboard Overview
     */
    public function index(): void {
        $this->checkAuth();

        $inquiryModel = new Inquiry();
        $stats = $inquiryModel->getStatistics();
        $recentInquiries = $inquiryModel->getRecent(6);
        $disciplineStats = $inquiryModel->getDisciplineStats(6);

        $this->view('admin/dashboard', [
            'pageTitle'       => 'Admin Dashboard — Tristara Academic Ops',
            'currentAdminTab' => 'dashboard',
            'adminUser'       => $_SESSION['admin_user'],
            'stats'           => $stats,
            'recentInquiries' => $recentInquiries,
            'disciplineStats' => $disciplineStats
        ]);
    }
}
