<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        preg_match('/\<script(.*?)?\>(.|\s)*?\<\/script\>/i', $_POST["reactie"])
    ) {
        $content = "<b>U mag geen script-tags gebruiken</b>";
    } else {
        $content = $_POST["reactie"];
    }
} else {
    $content = '<form action="" method="post">';
    $content .=
        '<textarea name="reactie" placeholder="Hier uw reactie, HTML is toegestaan"></textarea>';
    $content .= '<input type="submit">';
    $content .= '</form>';
} ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 2</title>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>