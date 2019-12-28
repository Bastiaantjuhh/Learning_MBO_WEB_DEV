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
</head>
<body>
<h1>Inloggen bij het bedrijf</h1>
<form action="verwerklogin.php" method="post">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" maxlength="40" /><br>
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" /><br>
    <input type="text" id="2fa_code" name="2fa_code" /><br>
    <input type="submit" value="inloggen" name="inloggen" />
</form>
<a href="registratie.php">Registratie</a>
</body>
</html>