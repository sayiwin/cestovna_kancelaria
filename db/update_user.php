<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once(__DIR__ . '/../classes/Users.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $login = $_POST['login'];

        $users = new Users();

        $updateResult = $users->updateUser($login);

        if ($updateResult === true) {
            session_start();
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['Login'] = $user['login'];
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
