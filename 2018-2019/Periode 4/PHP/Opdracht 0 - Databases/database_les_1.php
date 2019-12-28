<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$sql = new mysqli("127.0.0.1", "root", "root", "classicmodels");

$viewData = $sql->query("SELECT idoffices, city FROM offices");

while ($x = $viewData->fetch_assoc()) {
    echo "<h3>Kantoor:</h3>";

    foreach ($x as $y) {
        echo "<p>" . $y . "</p>";
    }
}
echo "<h1>Prepare:</h1>";

$sql->prepare("SELECT idoffices, city FROM offices");

$sql->close();
