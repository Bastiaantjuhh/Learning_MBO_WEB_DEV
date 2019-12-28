<html>
<head>
    <style>
        body {
            background-color: darkgrey;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="kleur" placeholder="Kleur">
        <input type="text" name="lengte" placeholder="Lengte">
        <input type="text" name="dikte" placeholder="Dikte">
        <input type="submit">
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (
            isset($_POST["kleur"]) &&
            isset($_POST["lengte"]) &&
            isset($_POST["dikte"])
        ) {
            echo "<p>De door jouw getekende lijn is " .
                $_POST["kleur"] .
                ", is " .
                $_POST["lengte"] .
                " lang & " .
                $_POST["dikte"] .
                " dik.</p>";
            echo "<div style='background-color: " .
                $_POST["kleur"] .
                "; width: " .
                $_POST["lengte"] .
                "px; height: " .
                $_POST["dikte"] .
                "px;'></div>";
        } else {
            echo "<p style='color: red;'>Niet alle velden zijn ingevuld!!!</p>";
        }
    } ?>
</body>
</html>