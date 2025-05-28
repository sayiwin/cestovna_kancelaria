<?php
require_once('../classes/Users.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

try {
    $user = new Users();
    $user->register($firstname, $lastname, $login, $password, $email, $phone);
    return header('Location: ../thanks.php');
} catch (Exception $e) {
    http_response_code(404);
    die('Chyba pri odosielaní správy do databázy!');
}
?>