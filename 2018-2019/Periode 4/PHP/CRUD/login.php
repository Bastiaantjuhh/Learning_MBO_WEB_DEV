<?php
require "sql_connect.php";

$content = "";

if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST['recaptcha_response'])
) {
    $username = mysqli_real_escape_string($sql, $_POST["username"]);
    $wachtwoord = mysqli_real_escape_string(
        $sql,
        hash("sha1", $_POST["password"])
    );

    $queryLogin = $sql->query(
        "SELECT gebruikersnaam, wachtwoord FROM medewerkers WHERE gebruikersnaam = '" .
            $username .
            "' AND wachtwoord = '" .
            $wachtwoord .
            "'"
    );

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LdVC6UUAAAAAEf3uWsIa5UVR6BaD3HdC_JUw4KU';
    $recaptcha_response = $_POST['recaptcha_response'];

    $recaptcha = file_get_contents(
        $recaptcha_url .
            '?secret=' .
            $recaptcha_secret .
            '&response=' .
            $recaptcha_response
    );
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->score >= 0.5) {
        if ($queryLogin->num_rows > 0) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $_POST["username"];
            header("location: medewerker_tonen.php");
        } else {
            $content = "<p>Login onjuist</p>";
        }
    } else {
        $content .= 'Ga weg met je SPAM BOT';
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
    <title>Inloggen bij het bedrijf</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdVC6UUAAAAAJ3oqBVpOPoLodSf3D7QrZXpLu5O"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdVC6UUAAAAAJ3oqBVpOPoLodSf3D7QrZXpLu5O', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
</head>
<body>
<h1>Inloggen bij het bedrijf</h1>
<?php echo $content; ?>
</body>
</html>

