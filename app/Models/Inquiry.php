<?php
namespace App\Models;

use Core\Model;
use PDO;

/**
 * Tristara IT Solutions - Inquiry Model
 * Manages student assignment inquiries stored in tristara_db.inquiries
 */
class Inquiry extends Model {

    /**
     * Create a new student inquiry
     */
    public function create(array $data): int|false {
        $sql = "INSERT INTO inquiries 
                (full_name, email, phone_code, phone, subject, service_category, deadline, word_count, instructions, status, created_at) 
                VALUES 
                (:full_name, :email, :phone_code, :phone, :subject, :service_category, :deadline, :word_count, :instructions, 'new', NOW())";

        $stmt = $this->db->prepare($sql);
        $success = $stmt->execute([
            ':full_name'        => $data['full_name'],
            ':email'            => $data['email'],
            ':phone_code'       => $data['phone_code'] ?? '+91',
            ':phone'            => $data['phone'] ?? '',
            ':subject'          => $data['subject'] ?? 'General Engineering',
            ':service_category' => $data['service_category'] ?? 'Academic Assignment',
            ':deadline'         => !empty($data['deadline']) ? $data['deadline'] : null,
            ':word_count'       => !empty($data['word_count']) ? $data['word_count'] : null,
            ':instructions'     => $data['instructions'] ?? ''
        ]);

        if ($success) {
            return (int) $this->db->lastInsertId();
        }
        return false;
    }

    /**
     * Retrieve all inquiries (optional status or search filter)
     */
    public function getAll(?string $status = null, ?string $search = null): array {
        $sql = "SELECT * FROM inquiries WHERE 1=1";
        $params = [];

        if (!empty($status) && in_array($status, ['new', 'contacted', 'in_progress', 'completed'], true)) {
            $sql .= " AND status = :status";
            $params[':status'] = $status;
        }

        if (!empty($search)) {
            $sql .= " AND (full_name LIKE :search1 OR email LIKE :search2 OR phone LIKE :search3 OR subject LIKE :search4)";
            $searchTerm = "%{$search}%";
            $params[':search1'] = $searchTerm;
            $params[':search2'] = $searchTerm;
            $params[':search3'] = $searchTerm;
            $params[':search4'] = $searchTerm;
        }

        $sql .= " ORDER BY created_at DESC";

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    /**
     * Get recent inquiries (for dashboard widgets)
     */
    public function getRecent(int $limit = 8): array {
        $stmt = $this->db->prepare("SELECT * FROM inquiries ORDER BY created_at DESC LIMIT :limit");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Aggregate statistics across inquiry statuses
     */
    public function getStatistics(): array {
        $sql = "SELECT 
                    COUNT(*) as total,
                    SUM(CASE WHEN status = 'new' THEN 1 ELSE 0 END) as new_count,
                    SUM(CASE WHEN status = 'contacted' THEN 1 ELSE 0 END) as contacted_count,
                    SUM(CASE WHEN status = 'in_progress' THEN 1 ELSE 0 END) as in_progress_count,
                    SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed_count
                FROM inquiries";
        $stmt = $this->db->query($sql);
        $res = $stmt->fetch();

        return [
            'total'       => (int) ($res['total'] ?? 0),
            'new'         => (int) ($res['new_count'] ?? 0),
            'contacted'   => (int) ($res['contacted_count'] ?? 0),
            'in_progress' => (int) ($res['in_progress_count'] ?? 0),
            'completed'   => (int) ($res['completed_count'] ?? 0),
        ];
    }

    /**
     * Find inquiry by ID
     */
    public function getById(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM inquiries WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    /**
     * Update inquiry status
     */
    public function updateStatus(int $id, string $status): bool {
        $validStatuses = ['new', 'contacted', 'in_progress', 'completed'];
        if (!in_array($status, $validStatuses, true)) {
            return false;
        }

        $stmt = $this->db->prepare("UPDATE inquiries SET status = :status WHERE id = :id");
        return $stmt->execute([':status' => $status, ':id' => $id]);
    }

    /**
     * Delete inquiry by ID
     */
    public function delete(int $id): bool {
        $stmt = $this->db->prepare("DELETE FROM inquiries WHERE id = :id LIMIT 1");
        return $stmt->execute([':id' => $id]);
    }

    /**
     * Get subject/discipline breakdown statistics dynamically from inquiries table
     * Automatically groups by subject, orders by highest volume, and computes percentage share
     */
    public function getDisciplineStats(int $limit = 6): array {
        $colors = ['#22c55e', '#3b82f6', '#f59e0b', '#ef4444', '#8b5cf6', '#06b6d4'];

        // Total count of inquiries
        $totalStmt = $this->db->query("SELECT COUNT(*) FROM inquiries");
        $total = (int) $totalStmt->fetchColumn();

        if ($total === 0) {
            $defaultSubjects = [
                'Computer Science & IT',
                'Data Science & Machine Learning',
                'Business Management & MBA',
                'Engineering (Mech/Elec/Civil)',
                'Mathematics & Statistics',
                'Healthcare & Nursing'
            ];
            $stats = [];
            foreach ($defaultSubjects as $idx => $subj) {
                $stats[] = [
                    'subject'    => $subj,
                    'count'      => 0,
                    'percentage' => 0,
                    'color'      => $colors[$idx % count($colors)]
                ];
            }
            return $stats;
        }

        $sql = "SELECT subject, COUNT(*) as count 
                FROM inquiries 
                WHERE subject IS NOT NULL AND TRIM(subject) != ''
                GROUP BY subject 
                ORDER BY count DESC 
                LIMIT :limit";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stats = [];
        $idx = 0;
        foreach ($rows as $row) {
            $count = (int) $row['count'];
            $pct = round(($count / $total) * 100);
            $stats[] = [
                'subject'    => $row['subject'],
                'count'      => $count,
                'percentage' => $pct,
                'color'      => $colors[$idx % count($colors)]
            ];
            $idx++;
        }

        return $stats;
    }

}
