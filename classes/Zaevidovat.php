<?php

require_once(__DIR__ . '/Database.php');

class Zaevidovat extends Database {
    protected $connection;
    
    public function __construct() {
        $this->connect();
        $this->connection = $this->getConnection();
    }
    
    public function ulozitSpravu($login, $count, $city, $types) {
        $userData = $this->getUserDataByLogin($login);
    
        if (!$userData) {
            throw new \Exception("Používateľ nebol nájdený.");
        }
    
        $sql = "INSERT INTO request (login, count, city, types)
                VALUES(:login, :count, :city, :types)";
        $statement = $this->connection->prepare($sql);
    
        try {
            $insert = $statement->execute([
                ':login' => $login,
                ':count' => $count,
                ':city' => $city,
                ':types' => $types
            ]);
            http_response_code(200);
            return $insert;
        } catch (\Exception $exception) {
            error_log("Chyba pri vkladaní do DB: " . $exception->getMessage());
            http_response_code(500);
            return false;
        }
    }

    public function getUserDataByLogin($login) {
        $sql = "SELECT firstname, lastname, email, phone FROM users WHERE login = :login LIMIT 1";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':login', $login);
        $statement->execute();
        return $statement->fetch();
    }
}
?>