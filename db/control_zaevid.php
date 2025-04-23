<?php
require_once('../classes/Zaevidovat.php');

use cestovna_kancelaria\classes\Zaevidovat;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count = $_POST['count'] ?? '';
    $city = $_POST['city'] ?? '';
    $types = $_POST['types'] ?? '';

    // Overenie údajov
    if (empty($count) || empty($city) || empty($types)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    // Uloženie správy do databázy
    $request = new Zaevidovat();
    $ulozene = $request->ulozitSpravu($count, $city, $types);

    if ($ulozene) {
        header('Location: ../end.php');
        exit;
    } else {
        die('Chyba pri odosielaní správy do databázy!');
    }
} else {
    die('Neplatný prístup!');
}