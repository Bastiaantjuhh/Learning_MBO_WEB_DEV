<?php
require "sql_connect.php";
if (isset($_SESSION["loggedin"])) {
    $content = "";
    $getID = mysqli_real_escape_string($sql, $_GET['id']);
    $viewData = $sql->query(
        "SELECT voornaam, achternaam, idmedewerkers FROM medewerkers WHERE idmedewerkers =  '$getID'"
    );

    while ($x = mysqli_fetch_assoc($viewData)) {
        $xVoornaam = $x["voornaam"];
        $xAchternaam = $x["achternaam"];

        $content .=
            '<form method="POST" action="medewerker_bewerken_database.php">';
        $content .=
            '<input type="text" name="id" hidden value="' . $getID . '">';
        $content .=
            '<input type="text" name="voornaam" placeholder="Voornaam" value="' .
            $xVoornaam .
            '">';
        $content .=
            '<input type="text" name="achternaam" placeholder="Achternaam" value="' .
            $xAchternaam .
            '">';
        $content .= '<input type="submit">';
        $content .= '</form>';
    }

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
<h2>CRUD - Update</h2>
<?php echo $content; ?>
</html>