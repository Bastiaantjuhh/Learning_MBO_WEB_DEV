<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Oppervlakte berekenen</title>
    <style>
        * {
            margin:0;
            padding: 0;
        }
    </style>

</head>
<body>
    <form action="/" method="post">
        <div>
            <label>Rechthoek
                <input type="radio" name="shape" value="Rechthoek">
            </label>
        </div>
        <div>
            <label>Cirkel
                <input type="radio" name="shape" value="Cirkel">
            </label>
        </div>
        <div>
            <label>lengte
                <input name="length" type="number">
            </label>
            <label>breedte
                <input name="width" type="number">
            </label>
            <label>diameter
                <input name="diameter" type="number">
            </label>
        </div>
        <div>
            <input type="submit" value="Bereken">
        </div>
        <div id="result">
            Oppervlakte: <?php echo $result['oppervlakte']; ?>
            Omtrek: <?php echo $result['omtrek']; ?>
        </div>

    </form>
</body>
</html>