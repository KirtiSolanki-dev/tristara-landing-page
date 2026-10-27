<?php
namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\Inquiry;

/**
 * Tristara IT Solutions - Admin Inquiries Management Controller
 */
class InquiryController extends Controller {

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
     * List all student inquiries with filters
     */
    public function index(): void {
        $this->checkAuth();

        $statusFilter = isset($_GET['status']) ? trim($_GET['status']) : null;
        $searchQuery  = isset($_GET['q']) ? trim($_GET['q']) : null;

        $inquiryModel = new Inquiry();
        $inquiries    = $inquiryModel->getAll($statusFilter, $searchQuery);
        $stats        = $inquiryModel->getStatistics();

        $this->view('admin/inquiries', [
            'pageTitle'       => 'Student Inquiries — Tristara Ops Desk',
            'currentAdminTab' => 'inquiries',
            'adminUser'       => $_SESSION['admin_user'],
            'inquiries'       => $inquiries,
            'stats'           => $stats,
            'currentFilter'   => $statusFilter,
            'searchQuery'     => $searchQuery
        ]);
    }

    /**
     * Update inquiry workflow status (AJAX POST)
     */
    public function updateStatus(): void {
        $this->checkAuth();

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->json(['success' => false, 'message' => 'POST method required.'], 405);
        }

        $post = $this->getPost();
        $id     = isset($post['id']) ? (int) $post['id'] : 0;
        $status = trim($post['status'] ?? '');

        if ($id <= 0 || empty($status)) {
            $this->json(['success' => false, 'message' => 'Invalid parameters provided.'], 400);
        }

        $inquiryModel = new Inquiry();
        $updated = $inquiryModel->updateStatus($id, $status);

        if ($updated) {
            $this->json(['success' => true, 'message' => "Inquiry #{$id} status updated to '{$status}'."]);
        } else {
            $this->json(['success' => false, 'message' => 'Failed to update status.'], 500);
        }
    }

    /**
     * Delete an inquiry (AJAX POST)
     */
    public function delete(): void {
        $this->checkAuth();

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->json(['success' => false, 'message' => 'POST method required.'], 405);
        }

        $post = $this->getPost();
        $id = isset($post['id']) ? (int) $post['id'] : 0;

        if ($id <= 0) {
            $this->json(['success' => false, 'message' => 'Invalid inquiry ID.'], 400);
        }

        $inquiryModel = new Inquiry();
        $deleted = $inquiryModel->delete($id);

        if ($deleted) {
            $this->json(['success' => true, 'message' => "Inquiry #{$id} removed successfully."]);
        } else {
            $this->json(['success' => false, 'message' => 'Failed to delete inquiry.'], 500);
        }
    }
}
