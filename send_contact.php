<?php
// Überprüfen, ob das Formular mit der POST-Methode gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular sicher extrahieren
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Ziel-E-Mail-Adresse anpassen
    $to = "yannik.rer@gmail.com"; // Ändern Sie dies in Ihre E-Mail-Adresse

    // Betreff der E-Mail
    $subject = "Kontaktformular Nachricht von $name";

    // Inhalt der E-Mail
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";

    // E-Mail-Header setzen
    $headers = "From: $email";

    // E-Mail senden und Ergebnis überprüfen
    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht gesendet!";
    } else {
        echo "Fehler beim Senden der Nachricht.";
    }
}
?>