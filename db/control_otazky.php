<?php
require_once('../classes/Otazky.php');

use cestovna_kancelaria\classes\Otazky;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $names = $_POST['names'] ?? '';
    $email = $_POST['email'] ?? '';
    $question = $_POST['question'] ?? '';

    if (empty($names) || empty($email) || empty($question)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    $otazky = new Otazky();
    $ulozene = $otazky->ulozitSpravu($names, $email, $question);

    if ($ulozene) {
        header('Location: ../otazka.php');
        exit;
    } else {
        die('Chyba pri odosielaní správy do databázy!');
    }
} else {
    die('Neplatný prístup!');
}
?>