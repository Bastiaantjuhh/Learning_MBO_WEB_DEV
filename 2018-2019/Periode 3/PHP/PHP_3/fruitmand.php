<?php
$fruitMand = array(
    "rood" => "appel",
    "geel" => "banaan",
    "oranje" => "sinaasappel",
    "groen" => "peer"
);
$getKleur = $_GET["kleur"];

if (in_array($fruitMand["$getKleur"], $fruitMand)) {
    $fruitSoort = $fruitMand["$getKleur"];
} else {
    $fruitSoort = "Niks gevonden. Probeer een andere kleur";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>Je hebt gekozen voor de kleur: <b><?php echo $getKleur; ?></b></p>
    <p>De volgende vrucht is geselecteerd: <b><?php echo $fruitSoort; ?></b></p>
</body>
</html>