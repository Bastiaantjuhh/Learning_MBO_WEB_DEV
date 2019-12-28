<?php
require "sql_connect.php";
if (isset($_SESSION["loggedin"])) {
    $postID = mysqli_real_escape_string($sql, $_POST["id"]);
    $postVoornaam = mysqli_real_escape_string($sql, $_POST["voornaam"]);
    $postAchternaam = mysqli_real_escape_string($sql, $_POST["achternaam"]);

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
