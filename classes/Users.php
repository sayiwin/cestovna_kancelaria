<?php

require_once(__DIR__ . '/Database.php');

class Users extends Database {
    protected $connection;

    public function __construct() {
        $this->connect();
        $this->connection = $this->getConnection();
    }


    function register($firstname, $lastname, $login, $password, $email, $phone){
        try {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "SELECT * FROM users WHERE (login = ? OR email = ? OR phone = ?) LIMIT 1;";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $phone);
            $statement->execute();
            $existingUser = $statement->fetch();
            if ($existingUser) {
                throw new \Exception("Používateľ už existuje.");
            }

            $sql = "INSERT INTO users (firstname, lastname, login, password, email, phone) VALUES (?, ?, ?, ?, ?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $firstname);
            $statement->bindParam(2, $lastname);
            $statement->bindParam(3, $login);
            $statement->bindParam(4, $hashedPassword);
            $statement->bindParam(5, $email);
            $statement->bindParam(6, $phone);
            $statement->execute();
        } catch (\Exception $e){
            echo "Chyba pri vkladaní dát do databázy: " . $e->getMessage();
        }
    }

    function login($login, $password) {
        $sql = "SELECT * FROM users WHERE login = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $login);
        $statement->execute();
        $user = $statement->fetch();
        if (!$user) {
            throw new \Exception("Používateľ s daným menom neexistuje.");
        }

        $storedPassword = $user['password'];
        
        if (!password_verify($password, $storedPassword)) {
            throw new \Exception("Nesprávne heslo.");
        }

        session_start();
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['Login'] = $user['login'];
    }

    function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: http://localhost/cestovna_kancelaria/registracia.php');
        exit();
    }

    function deleteUser($login) {
        $sql = "DELETE FROM users WHERE login = :login";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':login', $login);
        
        try {
            $result = $statement->execute();
            return $result;
        } catch (\Exception $exception) {
            error_log("Chyba pri mazaní: " . $exception->getMessage());
            return false;
        }
    }

    public function updateUser($login) {
        if (session_status() == PHP_SESSION_NONE) {
            sesion_start();
        }
        try {
            $sql = "UPDATE users SET login = ?";

            $sql .= " WHERE ID = ?";

            $stmt = $this->connection->prepare($sql);

                $stmt->bindParam(1, $login);
                $stmt->bindParam(2, $_SESSION['user_id']);

            $stmt->execute();

            return true;
        } catch (Exception $e) {
            return "Chyba pri aktualizácii údajov: " . $e->getMessage();
        }
    }
}