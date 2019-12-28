<?php
require "sql_connect.php";
if (isset($_SESSION["loggedin"])) {
    $content = "";
    $content .=
        "<p>Gebruiker: " .
        $_SESSION['username'] .
        " - <a href=\"logout.php\">Uitloggen</a></p>";
    $viewData = $sql->query(
        "SELECT voornaam, achternaam, idmedewerkers FROM medewerkers"
    );
    $content .= "<table>";

    while ($x = mysqli_fetch_assoc($viewData)) {
        $content .= "<tr>";
        $content .= "<td>" . $x["voornaam"] . " " . $x["achternaam"] . "</td>";
        $content .=
            "<td><a href='medewerker_bewerken.php?id=" .
            $x["idmedewerkers"] .
            "'>Wijziggen</a></td>";
        $content .=
            "<td><a href='medewerker_verwijderen_database.php?id=" .
            $x["idmedewerkers"] .
            "'>Verwijderen</a></td>";
        $content .= "</tr>";
    }

    $content .= "</table>";

    $sql->close();
} else {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Medewerkers administratie</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
    <h1>Medewerkers administratie</h1>
    <h2>CRUD - Read</h2>
    <?php echo $content; ?>
    <p><a href="medewerker_toevoegen.html">Toevoegen</a></p>
</html>
