<?php
namespace Core;

use PDO;

/**
 * Tristara IT Solutions - Base Model
 */
abstract class Model {
    protected PDO $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }
}
