<?php

require_once('../classes/Users.php');
use cestovna_kancelaria\classes\Users;

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';

    if (empty($login)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    if ($_SESSION['Login'] !== $login) {
        die('Chyba: Zadaný login nesúhlasí s vaším prihláseným účtom.');
    }

    $user = new Users();
    $ulozene = $user->deleteUser($login);

    if ($ulozene) {
        session_unset();
        session_destroy();
        header('Location: ../registracia.php');
        exit;
    } else {
        die('Chyba pri odstraňovaní účtu!');
    }
} else {
    die('Neplatný spôsob požiadavky!');
}