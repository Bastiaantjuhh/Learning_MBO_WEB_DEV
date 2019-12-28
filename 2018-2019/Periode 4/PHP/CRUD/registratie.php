<?php
require "sql_connect.php";

$content = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $postGebruikersnaam = mysqli_real_escape_string($sql, $_POST["username"]);
    $postWachtwoord = mysqli_real_escape_string(
        $sql,
        hash("sha1", $_POST["password"])
    );
    $postVoornaam = mysqli_real_escape_string($sql, $_POST["voornaam"]);
    $postAchternaam = mysqli_real_escape_string($sql, $_POST["achternaam"]);

    $sql->query(
        "INSERT INTO medewerkers (voornaam, achternaam, gebruikersnaam, wachtwoord) VALUES ('" .
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
    <title>Bedrijfsadministratie</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h1>Registreren bij het bedrijf</h1>
    <?php echo $content; ?>
</body>
</html>