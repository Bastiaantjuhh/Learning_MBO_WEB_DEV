<?php
require "sql_connect.php";

$content = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $wachtwoord = $_POST["password"];

    $queryLogin = $sql->query(
        "SELECT gebruikersnaam, wachtwoord FROM fans WHERE gebruikersnaam = '" .
            $username .
            "' AND wachtwoord = '" .
            $wachtwoord .
            "'"
    );

    if ($queryLogin->num_rows > 0) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $_POST["username"];
        header("location: fan_pagina.php");
    } else {
        $content = "<p>Login onjuist</p>";
    }
} else {
    $content = '<form action="" method="post">';
    $content .= '<label for="username">Gebruikersnaam:</label>';
    $content .=
        '<input type="text" id="username" name="username" maxlength="40" /><br>';
    $content .= '<label for="password">Wachtwoord:</label>';
    $content .= '<input type="password" id="password" name="password" /><br>';
    $content .=
        '<input type="hidden" name="recaptcha_response" id="recaptchaResponse">';
    $content .= '<input type="submit" value="inloggen" name="inloggen" />';
    $content .= '</form>';
    $content .= '<a href="registratie.php">Registratie</a>';
}
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <title>Inloggen bij fanpagina</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
<h1>Inloggen bij fanpagin</h1>
<?php echo $content; ?>
</body>
</html>

