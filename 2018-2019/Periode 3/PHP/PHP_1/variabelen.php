<?php
$Sraatnaam = "Goirkelaan";
$Huisnummer = 12;
$JaarsalarisDir = 2245.87;
$BSN = "151876123";
$Gehuwd = true;
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset"utf-8" />
    <title>opgave 1.1</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Betekenis</th>
            <th>Inhoud</th>
            <th>Type</th>
        </tr>
        <tr>
            <th>Straatnaam waar het gebouw staat</th>
            <th><?php echo $Sraatnaam; ?></th>
            <th><?php echo gettype($Sraatnaam); ?></th>
        </tr>
        <tr>
            <th>Huisnummer van dit gebouw</th>
            <th><?php echo $Huisnummer; ?></th>
            <th><?php echo gettype($Huisnummer); ?></th>
        </tr>
        <tr>
            <th>Jaarsalaris van de directeur</th>
            <th><?php echo $JaarsalarisDir; ?></th>
            <th><?php echo gettype($JaarsalarisDir); ?></th>
        </tr>
        <tr>
            <th>Burger service nummer / Sofi nummer</th>
            <th><?php echo $BSN; ?></th>
            <th><?php echo gettype($BSN); ?></th>
        </tr>
        <tr>
            <th>Getrouwd</th>
            <th><?php echo $Gehuwd; ?></th>
            <th><?php echo gettype($Gehuwd); ?></th>
        </tr>

    </table>
</body>
</html>
