<?php
function leesBestand()
{
    $fBestand = fopen("voorbeeld.csv", "r");

    echo "<table>";
    echo "<tr><th>Soort vraag:</th><th>Naam</th><th>Opmerking</th><th>Datum</th><th>Afgetekend?</th><th> </th></tr>";

    while (($x = fgetcsv($fBestand)) != false) {
        echo "<tr>";
        foreach ($x as $y) {
            echo "<th>" . $y . "</th>";
        }
        echo "<th><a href=''>Klaar</a></th>";
        echo "</tr>";
    }

    echo "</table>";
} ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Verzoeken bekijken</title>
    <style>
        * {
            font-family: Verdana;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
<?php echo leesBestand(); ?>
</body>
</html>