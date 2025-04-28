<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bonjour@solta-studio.com";
    $subject = "Nouveau formulaire envoyé depuis le site";
    $message = "
    Nom: {$_POST['nameInput']}
    Email: {$_POST['emailInput']}
    Téléphone: {$_POST['phoneInput']}
    Type de projet: {$_POST['projectType']}
    Lieu du projet: {$_POST['projectLocation']}
    Superficie: {$_POST['projectArea']} m²
    Budget: {$_POST['budgetInput']} €
    Message: {$_POST['messageInput']}
    ";
    $headers = "From: no-reply@solta-studio.com";

    mail($to, $subject, $message, $headers);
    header("Location: merci.html");
}
