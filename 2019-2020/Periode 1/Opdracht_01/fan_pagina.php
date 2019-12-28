<?php
require "sql_connect.php";
if (isset($_SESSION["loggedin"])) {
    $content = "<h1>Fan pagina</h1>";
    $content .= "<p>Goedenmiddag fan</p>";
    $content .= "<a href='logout.php'>Uitloggen</a>";

    $sql->close();
} else {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Fan pagina</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>
