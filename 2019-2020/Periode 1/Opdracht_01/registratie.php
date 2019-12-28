<?php
require "sql_connect.php";

$content = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $postGebruikersnaam = $_POST["username"];
    $postWachtwoord = $_POST["password"];
    $postVoornaam = $_POST["voornaam"];
    $postAchternaam = $_POST["achternaam"];

    $sql->query(
        "INSERT INTO fans (voornaam, achternaam, gebruikersnaam, wachtwoord) VALUES ('" .
            $postVoornaam .
            "', '" .
            $postAchternaam .
            "', '" .
            $postGebruikersnaam .
            "', '" .
            $postWachtwoord .
            "')"
    );
    header("location: login.php");
} else {
    $content .= "<form action='' method='POST'>";
    $content .=
        "<input type='text' name='username' placeholder='Gebruikersnaam' required><br>";
    $content .=
        "<input type='password' name='password' placeholder='Wachtwoord' required><br>";
    $content .=
        "<input type='text' name='voornaam' placeholder='Voornaam' required><br>";
    $content .=
        "<input type='text' name='achternaam' placeholder='Achternaam' required><br>";
    $content .= "<input type='submit' value='Verzend'>";
    $content .= "</form>";
}
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <title>Registreren als fan</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h1>Registreren als fan</h1>
    <?php echo $content; ?>
</body>
</html>