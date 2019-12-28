<?php
$contentView = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // VERPLICHTE VELDEN
    $postVarVoornaam = $_POST["voornaam"];
    $postVarAchternaam = $_POST["achternaam"];
    $postVarStraat = $_POST["straat"];
    $postVarHuisnummer = $_POST["huisnummer"];
    $postVarPostcode = $_POST["postcode"];
    $postVarPlaats = $_POST["plaats"];
    $postVarMailadres = $_POST["email"];
    $postVarTelefoonnummer = $_POST["telefoonnummer"];
    $postVarLeeftijd = $_POST["leeftijd"];
    $postVarGebruikersnaam = $_POST["gebruikersnaam"];
    $postVarWachtwoord01 = $_POST["wachtwoord"];
    $postVarWachtwoord02 = $_POST["herwachtwoord"];

    // NIET VERPLICHTE VELDEN
    $postVarHuisnummerToevoeging = $_POST["huisnummer_toevoeging"];

    if (
        !isset(
            $postVarVoornaam,
            $postVarAchternaam,
            $postVarStraat,
            $postVarHuisnummer,
            $postVarPostcode,
            $postVarPlaats,
            $postVarMailadres,
            $postVarTelefoonnummer,
            $postVarLeeftijd,
            $postVarGebruikersnaam,
            $postVarWachtwoord01,
            $postVarWachtwoord02
        )
    ) {
        $contentView .= "ERROR: Niet alle POST variables zijn verstuurd<br>";
    } else {
        $postInputs = [
            "voornaam" => "voornaam",
            "achternaam" => "achternaam",
            "straat" => "straat",
            "huisnummer" => "huisnummer",
            "postcode" => "postcode",
            "plaats" => "plaats",
            "email" => "e-mail adres",
            "telefoonnummer" => "telefoonnummer",
            "leeftijd" => "leeftijd",
            "gebruikersnaam" => "gebruikersnaam",
            "wachtwoord" => "wachtwoord",
            "herwachtwoord" => "wachtwoord (herhaling)"
        ];

        foreach ($postInputs as $key => $omscrijving) {
            if (empty($_POST[$key])) {
                $contentView .=
                    "Het veld '" . $omscrijving . "' is niet ingevuld<br>";
            }
        }

        if ($postVarWachtwoord01 != $postVarWachtwoord02) {
            $contentView .=
                "Wachtwoord & Wachtwoord herhaling zijn niet hetzelfde<br>";
        }

        $postInputsLetters = [
            "voornaam" => "voornaam",
            "achternaam" => "achternaam",
            "straat" => "straat",
            "plaats" => "plaats"
        ];

        foreach ($postInputsLetters as $key => $omscrijving) {
            if (!preg_match("/^[a-zA-Z ]*$/", $_POST[$key])) {
                $contentView .=
                    "Het veld '" .
                    $omscrijving .
                    "' mag alleen letters bevatten<br>";
            }
        }

        $postInputsUser = [
            "gebruikersnaam" => "gebruikersnaam",
            "wachtwoord" => "wachtwoord",
            "herwachtwoord" => "wachtwoord (herhaling)"
        ];

        foreach ($postInputsUser as $key => $omscrijving) {
            if (!preg_match("/[a-z0-9]{8,}$/", $_POST[$key])) {
                $contentView .=
                    "Het veld '" .
                    $omscrijving .
                    "' moet minimaal 8 en maximaal 20 karakters zijn<br>";
            }
        }

        if (
            !preg_match(
                "/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/",
                $_POST["email"]
            )
        ) {
            $contentView .= "Ongeldig mail<br>";
        }
    }
} else {
    function lijstMetLeeftijd()
    {
        $listItem = '<select id="leeftijd" name="leeftijd">';

        for ($x = 1; $x < 101; $x++) {
            $listItem .= '<option value="' . $x . '">' . $x . '</option>';
        }
        $listItem .= '</select>';
        return $listItem;
    }

    $contentView = '<form method="post" action="">';
    $contentView .= '<p>Persoonlijke gegevens</p>';
    $contentView .=
        '<input name="voornaam" placeholder="Voornaam (verplicht)" type="text">';
    $contentView .=
        '<input name="tussenvoegsel" placeholder="Tussenvoegsel" type="text">';
    $contentView .=
        '<input name="achternaam" placeholder="Achternaam (verplicht)" type="text">';
    $contentView .= lijstMetLeeftijd();
    $contentView .= '<p>Adres gegevens</p>';
    $contentView .=
        '<input name="straat" placeholder="Straat (verplicht)" type="text">';
    $contentView .=
        '<input name="huisnummer" placeholder="Huisnummer (verplicht)" type="text">';
    $contentView .=
        '<input name="huisnummer_toevoeging" placeholder="Huisnummer toevoeging" type="text">';
    $contentView .=
        '<input name="postcode" placeholder="Postcode (verplicht)" type="text">';
    $contentView .=
        '<input name="plaats" placeholder="Plaats (verplicht)" type="text">';
    $contentView .= '<p>Contact gegevens</p>';
    $contentView .=
        '<input name="email" placeholder="Mail adres (verplicht)" type="text">';
    $contentView .=
        '<input name="telefoonnummer" placeholder="Telefoonnummer (verplicht)" type="tel">';
    $contentView .= '<p>Account gegevens</p>';
    $contentView .=
        '<input name="gebruikersnaam" placeholder="Gebruikersnaam (verplicht)" type="text">';
    $contentView .=
        '<input name="wachtwoord" placeholder="Wachtwoord (verplicht)" type="password">';
    $contentView .=
        '<input name="herwachtwoord" placeholder="Herhaal wachtwoord (verplicht)" type="password">';
    $contentView .= '<input type="submit" value="Verstuur">';
    $contentView .= '<input type="reset" value="Leeg formulier">';
    $contentView .= '</form>';
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Formulier</title>
    <style>
        * { font-family: Helvetica; }
        b { display: block; }
        input, select, option {
            width: 360px;
            padding: 6px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid black;
            outline: none;
            display: block;
            border-radius: 6px;
        }
        input[type=submit]:hover, input[type=reset]:hover {
            background-color: black;
            color: white;
        }
    </style>

</head>
<body>
    <h1>Formulier</h1>
    <?php echo $contentView; ?>
</body>
</html>