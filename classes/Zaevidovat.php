<?php

require_once(__DIR__ . '/Database.php');

class Zaevidovat extends Database {
    protected $connection;
    
    public function __construct() {
        $this->connect();
        $this->connection = $this->getConnection();
    }
    
    public function ulozitSpravu($count, $city, $types) {
        $sql = "INSERT INTO request (IDuser, count, city, types)
                VALUES(:IDuser, :count, :city, :types)";
        $statement = $this->connection->prepare($sql);
    
        try {
            $insert = $statement->execute([
                ':IDuser' => $_SESSION['user_id'],
                ':count' => $count,
                ':city' => $city,
                ':types' => $types
            ]);
            http_response_code(200);
            return $insert;
        } catch (Exception $exception) {
            error_log("Chyba pri vkladaní do DB: " . $exception->getMessage());
            http_response_code(500);
            return false;
        }
    }
}
?>