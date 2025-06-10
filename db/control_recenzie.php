<?php
require_once('../classes/Recenzia.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $names = $_POST['names'] ?? '';
    $email = $_POST['email'] ?? '';
    $review = $_POST['review'] ?? '';

    if (empty($names) || empty($email) || empty($review)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    $recenzia = new Recenzia();
    $ulozene = $recenzia->ulozitSpravu($names, $email, $review);

    if ($ulozene) {
        header('Location: ../recenzia.php');
        exit;
    } else {
        die('Chyba pri odosielaní správy do databázy!');
    }
} else {
    die('Neplatný prístup!');
}
?>