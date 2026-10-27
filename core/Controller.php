<?php
namespace Core;

/**
 * Tristara IT Solutions - Base Controller
 */
abstract class Controller {

    /**
     * Send a JSON response
     */
    protected function json(array $data, int $statusCode = 200): void {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }

    /**
     * Render a PHP view file
     */
    protected function view(string $viewName, array $data = []): void {
        extract($data);
        $viewFile = dirname(__DIR__) . '/app/Views/' . $viewName . '.php';

        if (!file_exists($viewFile)) {
            http_response_code(404);
            echo "View [{$viewName}] not found.";
            exit;
        }

        require $viewFile;
        exit;
    }

    /**
     * Retrieve and merge POST parameters (supports standard FormData and application/json)
     */
    protected function getPost(): array {
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

        if (stripos($contentType, 'application/json') !== false) {
            $rawInput = file_get_contents('php://input');
            $data = json_decode($rawInput, true);
            return is_array($data) ? $data : [];
        }

        return $_POST ?? [];
    }
}
