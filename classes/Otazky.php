<?php
namespace cestovna_kancelaria\classes;

error_reporting(E_ALL);
ini_set("display_errors", "On");

require_once(__DIR__ . '/Database.php');

class Otazky extends Database {
    protected $connection;
    
    public function __construct() {
        $this->connect();
        $this->connection = $this->getConnection();
    }
    
    public function ulozitSpravu($names, $email, $question) {
        $sql = "INSERT INTO questions (names, email, question)
                VALUES(:names, :email, :question)";
        $statement = $this->connection->prepare($sql);
        
        try {
            $insert = $statement->execute([
                ':names' => $names,
                ':email' => $email,
                ':question' => $question
            ]);
            http_response_code(200);
            return $insert;
        } catch (\Exception $exception) {
            error_log("Chyba pri vkladaní do DB: " . $exception->getMessage());
            http_response_code(500);
            return false;
        }
    }
}
