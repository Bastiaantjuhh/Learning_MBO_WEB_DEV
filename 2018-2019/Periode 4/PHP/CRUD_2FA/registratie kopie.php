<?php
require "sql_connect.php";

$code = $tfa->getCode($secret);
$content = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $postGebruikersnaam = $_POST["username"];
    $postWachtwoord = hash("sha1", $_POST["password"]);
    $postVoornaam = $_POST["voornaam"];
    $postAchternaam = $_POST["achternaam"];
    $post2FA = $_SESSION["token"];

    $sql->query(
        "INSERT INTO medewerkers (voornaam, achternaam, gebruikersnaam, wachtwoord, straat) VALUES ('" .
            $postVoornaam .
            "', '" .
            $postAchternaam .
            "', '" .
            $postGebruikersnaam .
            "', '" .
            $postWachtwoord .
            "', '" .
            $post2FA .
            "')"
    );
    //header("location: login.php");
} else {
    $_SESSION["token"] = $secret;

    $content .= "<form action='' method='POST'>";
    $content .=
        "<input type='text' name='username' placeholder='Gebruikersnaam' required><br>";
    $content .=
        "<input type='password' name='password' placeholder='Wachtwoord' required><br>";
    $content .=
        "<input type='text' name='voornaam' placeholder='Voornaam' required><br>";
    $content .=
        "<input type='text' name='achternaam' placeholder='Achternaam' required><br>";
    $content .=
        '<input value="' .
        $_SESSION["token"] .
        '" type="text" name="2fasecret" disabled><br>';
    $content .= "<input type='submit' value='Verzend'>";
    $content .= "<h1>" . $code . "</h1>";
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
        body {
            width: 40%;

        }
    </style>
</head>
<body>
    <h1>Registreren bij het bedrijf</h1>
    <?php echo $content; ?>

    <p><img src="<?php echo $tfa->getQRCodeImageAsDataUri(
        'Gebruiker',
        $secret
    ); ?>"></p>
</body>
</html>
<?php
//echo $secret;
?>



