<?php

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
        } catch (Exception $exception) {
            error_log("Chyba pri vkladaní do DB: " . $exception->getMessage());
            http_response_code(500);
            return false;
        }
    }

    public function zobrazOtazky(int $limit = 5): array {
        $sql = "SELECT names, question FROM questions ORDER BY id DESC LIMIT :limit";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(':limit', $limit, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
}
}
