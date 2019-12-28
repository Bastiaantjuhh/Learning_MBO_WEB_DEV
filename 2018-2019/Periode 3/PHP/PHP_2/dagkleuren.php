<?php
$huidigeTijd = date(Hi);

// NACHT
if ($huidigeTijd >= "0000" && $huidigeTijd <= "0559") {
    $text = "Goedennacht";
    $color_BG = "black";
    $color_Font = "white";
}

// MORGEN
elseif ($huidigeTijd >= "0600" && $huidigeTijd <= "1159") {
    $text = "Goedenmorgen";
    $color_BG = "red";
    $color_Font = "white";
}

// MIDDAG
elseif ($huidigeTijd >= "1200" && $huidigeTijd <= "1759") {
    $text = "Goedenmiddag";
    $color_BG = "yellow";
    $color_Font = "black";
}

// AVOND
else {
    $text = "Goedenavond";
    $color_BG = "cyan";
    $color_Font = "black";
}
?>
<html>
<head>
    <title>Webpagina</title>
    <style>
        * {
            font-family: "Comic Sans MS";
            font-size: 175px;
            text-align: center;
            background-color: <?php echo $color_BG; ?>;
            color: <?php echo $color_Font; ?>;
        }
    </style>
</head>
<body>
    <?php echo "<h1>" . $text . "</h1>"; ?>
</body>
</html>