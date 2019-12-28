<?php
require "sql_connect.php";
if (isset($_SESSION["loggedin"])) {
    $postID = $_POST["id"];
    $postVoornaam = $_POST["voornaam"];
    $postAchternaam = $_POST["achternaam"];

    if (!isset($_POST["id"], $_POST["voornaam"], $_POST["achternaam"])) {
        echo "ERROR";
    } else {
        $result = $sql->query(
            "UPDATE medewerkers SET voornaam = '$postVoornaam', achternaam = '$postAchternaam' WHERE idmedewerkers = '$postID'"
        );

        if ($result) {
            header("Location:medewerker_tonen.php");
        }

        $sql->close();
    }
} else {
    header("location: login.php");
}
?>
