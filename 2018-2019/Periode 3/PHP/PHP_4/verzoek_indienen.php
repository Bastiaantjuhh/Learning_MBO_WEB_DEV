<?php
function scrijfBestand($bestandnaam, $verzoek_type, $naam, $vraag)
{
    $fBestand = fopen($bestandnaam, 'a');
    $fTekst =
        $verzoek_type .
        "," .
        $naam .
        "," .
        $vraag .
        "," .
        date("G:i d-m-Y") .
        "," .
        "false" .
        "\n";

    fwrite($fBestand, $fTekst);
    fclose($fBestand);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    scrijfBestand(
        "voorbeeld.csv",
        $_POST["verzoek_type"],
        $_POST["naam"],
        $_POST["vraag"]
    );

    $contentWeergeven =
        "<b>Gefelicteerd " . $_POST["naam"] . ", je verzoek is ingediend</b>";
} else {
    $contentWeergeven = '<form action="" method="post">';
    $contentWeergeven .= '<select name="verzoek_type">';
    $contentWeergeven .= '<option value="vraag">Vraag</option>';
    $contentWeergeven .= '<option value="aftekenen">Aftekenen</option>';
    $contentWeergeven .= '</select><br>';
    $contentWeergeven .=
        '<input type="text" name="vraag" placeholder="Vraag"><br>';
    $contentWeergeven .=
        '<input type="text" name="naam" placeholder="Naam"><br>';
    $contentWeergeven .= '<input type="submit" value="Verzoek indienen">';
    $contentWeergeven .= '</form>';
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Verzoek indienen</title>
    <style>
        * {
            font-family: Verdana;
        }
    </style>
</head>
<body>
    <?php echo $contentWeergeven; ?>
</body>
</html>