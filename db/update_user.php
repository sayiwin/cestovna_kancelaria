<?php
namespace cestovna_kancelaria\classes;

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once(__DIR__ . '/../classes/Users.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $userId = $_SESSION['user_id'];

        $users = new Users();

        $updateResult = $users->updateUser($firstname, $lastname, $login, $password, $email, $phone, $userId);

        if ($updateResult === true) {
            header('Location: ../home.php');
            exit();
        } else {
            echo $updateResult;
        }
    } catch (Exception $e) {
        echo "Chyba: " . $e->getMessage();
    }
}
?>
