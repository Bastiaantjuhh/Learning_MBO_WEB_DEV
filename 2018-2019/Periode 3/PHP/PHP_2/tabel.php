<html>
<head>
    <title>Webpagina</title>
</head>
<body>
<table>
    <?php
    $x = 0;
    $y = 1;
    $totaal = 10;

    for ($teller = 0; $teller < $totaal; $teller++) {
        echo "<tr>";
        echo "<td>" . $teller . $x . "</td>";
        echo "<td>" . $teller . $y . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>