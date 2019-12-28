<?php
if ($_GET) {
    $content = "<h1>Uw blokjes:</h1>";

    for ($x = 0; $x < $_GET["aantal"]; $x++) {
        $content .= '<div class="blokje"></div>';
    }
} else {
    $content .= '<form action="" method="get">';
    $content .=
        '<input type="number" name="aantal" placeholder="Aantal vierkanten?" required>';
    $content .= '<input type="submit">';
    $content .= '</form>';
} ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1</title>
    <style>
        .blokje {
            width: 100px;
            height: 100px;
            border: 4px solid red;
            margin: 4px;
            padding 4px;
            display:inline-block;
        }
    </style>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>