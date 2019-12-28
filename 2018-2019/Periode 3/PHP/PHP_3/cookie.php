<?php
// Cookie naam: UserIP
$getIP = $_SERVER["REMOTE_ADDR"];

setcookie("UserIP", $getIP, time() + 60 * 60 * 24 * 180);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>De COOKIE is op je computer geplaatst.</p>
    <p>De inhoud daarvan is je IP adress.<br>De inoud van de Cookie is: <b><?php echo $_COOKIE[
        "UserIP"
    ]; ?></b></p>
</body>
</html>
