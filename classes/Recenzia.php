<?php

require_once(__DIR__ . '/Database.php');


class Recenzia extends Database {
    protected $connection;
    
    public function __construct() {
        $this->connect();
        $this->connection = $this->getConnection();
    }
    
    public function ulozitSpravu($names, $email, $review) {
        try {
            $sql = "INSERT INTO review (names, email, review)
                    VALUES(:names, :email, :review)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(':names', $names);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':review', $review);
            $insert = $statement->execute();
            http_response_code(200);
            return $insert;
        } catch (Exception $exception) {
            error_log("Chyba pri vkladaní do DB: " . $exception->getMessage());
            http_response_code(500);
            return false;
        }
    }

    public function zobrazRecenziu(int $limit = 5): array {
        $sql = "SELECT names, review, dates FROM review ORDER BY id DESC LIMIT :limit";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(':limit', $limit, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
}
}
