<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Inquiry;

/**
 * Tristara IT Solutions - Contact & Assignment Inquiry Controller
 */
class ContactController extends Controller {

    /**
     * Handle assignment / project inquiry submission
     */
    public function submit(): void {
        // Ensure request is POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->json([
                'success' => false,
                'message' => 'Method not allowed. Only POST requests are accepted.'
            ], 405);
        }

        $post = $this->getPost();

        // 1. Sanitize input fields
        $fullName        = trim(strip_tags($post['full_name'] ?? ''));
        $email           = trim(filter_var($post['email'] ?? '', FILTER_SANITIZE_EMAIL));
        $phoneCode       = trim(strip_tags($post['phone_code'] ?? '+91'));
        $phone           = trim(strip_tags($post['phone'] ?? ''));
        $subject         = trim(strip_tags($post['subject'] ?? ''));
        $serviceCategory = trim(strip_tags($post['service_category'] ?? ''));
        $deadline        = trim(strip_tags($post['deadline'] ?? ''));
        $wordCount       = trim(strip_tags($post['word_count'] ?? ''));
        $instructions    = trim(strip_tags($post['instructions'] ?? ''));

        // 2. Validate mandatory fields
        $errors = [];

        if (empty($fullName) || mb_strlen($fullName) < 2) {
            $errors['full_name'] = 'Please enter your full name (at least 2 characters).';
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address.';
        }

        if (empty($subject)) {
            $errors['subject'] = 'Please select or enter the subject / discipline.';
        }

        if (empty($instructions) || mb_strlen($instructions) < 5) {
            $errors['instructions'] = 'Please provide brief assignment instructions or project details (at least 5 characters).';
        }

        // Return validation errors if any
        if (!empty($errors)) {
            $this->json([
                'success' => false,
                'message' => 'Please fill in all required fields properly.',
                'errors'  => $errors
            ], 422);
        }

        // 3. Format payload
        $inquiryData = [
            'full_name'        => $fullName,
            'email'            => $email,
            'phone_code'       => $phoneCode,
            'phone'            => $phone,
            'subject'          => $subject,
            'service_category' => !empty($serviceCategory) ? $serviceCategory : 'Assignment / Capstone Mentorship',
            'deadline'         => !empty($deadline) ? $deadline : null,
            'word_count'       => !empty($wordCount) ? $wordCount : null,
            'instructions'     => $instructions
        ];

        // 4. Save to Database
        try {
            $inquiryModel = new Inquiry();
            $inquiryId = $inquiryModel->create($inquiryData);

            if ($inquiryId) {
                $this->json([
                    'success'    => true,
                    'message'    => 'Your assignment inquiry has been registered successfully! Our academic coordinator will reach out to you within 30 minutes.',
                    'inquiry_id' => $inquiryId
                ], 200);
            } else {
                $this->json([
                    'success' => false,
                    'message' => 'Unable to save your inquiry. Please try again or WhatsApp us directly.'
                ], 500);
            }
        } catch (\Throwable $e) {
            $this->json([
                'success' => false,
                'message' => 'Server error while processing your inquiry: ' . $e->getMessage()
            ], 500);
        }
    }
}
