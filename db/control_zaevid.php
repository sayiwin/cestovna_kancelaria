<?php
session_start();

require_once('../classes/Zaevidovat.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['Login'])) {
        die('Používateľ nie je prihlásený!');
    }

    $login = $_SESSION['Login'];
    $count = $_POST['count'] ?? '';
    $city = $_POST['city'] ?? '';
    $types = $_POST['types'] ?? '';

    if (empty($count) || empty($city) || empty($types)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    $request = new Zaevidovat();
    $ulozene = $request->ulozitSpravu($login, $count, $city, $types);

    if ($ulozene) {
        header('Location: ../end.php');
        exit;
    } else {
        die('Chyba pri odosielaní správy do databázy!');
    }
} else {
    die('Neplatný prístup!');
}
?>
