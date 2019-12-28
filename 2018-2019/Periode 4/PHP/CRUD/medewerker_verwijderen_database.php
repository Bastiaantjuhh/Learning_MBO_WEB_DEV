<?php
require "sql_connect.php";
if (isset($_SESSION["loggedin"])) {
    $postID = mysqli_real_escape_string($sql, $_GET["id"]);

    if (!isset($_GET["id"])) {
        echo "ERROR";
    } else {
        $result = $sql->query(
            "DELETE FROM medewerkers WHERE idmedewerkers = '$postID'"
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
