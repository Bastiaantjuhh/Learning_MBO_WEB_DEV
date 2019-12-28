<html>
<head>
    <title>Webpagina</title>
</head>
<body>
    <?php
    $huidigeTijd = date(Hi);

    // NACHT
    if ($huidigeTijd >= "0000" && $huidigeTijd <= "0559") {
        echo "<h1>Goedennacht</h1>";
    }

    // MORGEN
    elseif ($huidigeTijd >= "0600" && $huidigeTijd <= "1159") {
        echo "<h1>Goedenmorgen</h1>";
    }
    // MIDDAG
    elseif ($huidigeTijd >= "1200" && $huidigeTijd <= "1759") {
        echo "<h1>Goedenmiddag</h1>";
    }
    // AVOND
    else {
        echo "<h1>Goedenavond</h1>";
    }
    ?>
</body>
</html>