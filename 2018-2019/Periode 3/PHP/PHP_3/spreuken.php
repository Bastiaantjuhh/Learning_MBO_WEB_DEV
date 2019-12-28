<?php
$spreuken = [
    "A Jäger a day, keeps the doctor away!",
    "Ik wil mezelf wel eens ontmoeten in plaats van mezelf steeds tegen te komen.",
    "We zijn allemaal amateurs, want het leven is te kort om professional te worden.",
    "Problemen komen niet toevallig op je weg. Het zijn tekenen die je moet ontcijferen.",
    "Het leven begint op het moment waarop je je niets meer aantrekt van wat andere mensen over je denken."
];
/*
 * Bron van mijn spreuken: https://www.spiritum.nl/wijsheden-spreuken/
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Toon de spreuken op het scherm met een foreach lus:</h1>
    <ul>
    <?php foreach ($spreuken as $spreukWeergeven) {
        echo "<li>" . $spreukWeergeven . "</li>";
    } ?>
    </ul>
</body>
</html>