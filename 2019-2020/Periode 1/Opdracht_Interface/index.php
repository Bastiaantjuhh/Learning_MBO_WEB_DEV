<?php
require_once "class/interface.class.php";
require_once "class/cirkel.class.php";
require_once "class/vierkant.class.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if ($_POST["length"] = "" || $_POST["width"] = "" || $_POST["diameter"] = "") {
    //     echo "<p>FOUT: Je bent een van de velden vergeten in te vullen</p>";
    // } else {
    $rechthoek = new Vierkant($_POST["length"], $_POST["width"]);

    echo "<p>Opervlakte rechthoek: " . $rechthoek->oppervlakte() . "</p>";
    echo "<p>Omtrek rechthoek: " . $rechthoek->omtrek() . "</p>";

    $cirkel = new Cirkel($_POST["diameter"]);

    echo "<p>Oppervlakte cirkel: " . $cirkel->oppervlakte() . "</p>";
    echo "<p>Omtrek cirkel: " . $cirkel->omtrek() . "</p>";

    //  }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Oppervlakte berekenen</title>
    <style>
        * {
            margin:0;
            padding: 0;
            font-family: Helvetica;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div>
            <label>Rechthoek
                <input type="radio" name="shape">
            </label>
        </div>
        <div>
            <label>Cirkel
                <input type="radio" name="shape">
            </label>
        </div>
        <div>
            <label>lengte
                <input name="length" type="number">
            </label>
            <label>breedte
                <input name="width" type="number">
            </label>
            <label>diameter
                <input name="diameter" type="number">
            </label>
        </div>
        <div>
            <input type="submit" value="Bereken">
        </div>
    </form>
</body>
</html>