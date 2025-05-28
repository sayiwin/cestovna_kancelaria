<?php
require_once('../classes/Users.php');

$login = $_POST['login'];
$password = $_POST['password'];

try {
    $user = new Users();
    $user->login($login, $password);
    return header('Location: ../home.php');
} catch (Exception $e) {
    http_response_code(404);
    echo ("Chyba:" . $e->getMessage());
}

?>