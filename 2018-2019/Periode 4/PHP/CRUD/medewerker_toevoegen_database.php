<?php
require "sql_connect.php";
if (isset($_SESSION["loggedin"])) {
    $inputVoornaam = mysqli_real_escape_string($sql, $_POST["voornaam"]);
    $inputAchternaam = mysqli_real_escape_string($sql, $_POST["achternaam"]);

    if (!isset($inputVoornaam, $inputAchternaam)) {
        echo "ERROR";
    } else {
        $result = $sql->query(
            "INSERT INTO medewerkers (voornaam,achternaam) VALUES ('$inputVoornaam', '$inputAchternaam')"
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
