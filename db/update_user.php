<?php
session_start();

require_once('../classes/Users.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $login = $_POST['login'];

        $users = new Users();

        $updateResult = $users->updateUser($login);

        if ($updateResult === true) {
            $user = $users->getUserByLogin($login);

            if ($user) {
                $_SESSION['user_id'] = $user['ID'];
                $_SESSION['Login'] = $user['login'];
                header('Location: ../home.php');
                exit();
            } else {
                echo "Nepodarilo sa načítať údaje používateľa po aktualizácii.";
            }
        } else {
            echo $updateResult;
        }
    } catch (Exception $e) {
        echo "Chyba: " . $e->getMessage();
    }
}
?>