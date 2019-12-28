<?php
$dagen = array(
    'Zondag',
    'Maandag',
    'Dinsdag',
    'Woensdag',
    'Donderdag',
    'Vrijdag',
    'Zaterdag'
);
$maanden = array(
    'Januari',
    'Februari',
    'Maart',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Augustus',
    'September',
    'Oktober',
    'November',
    'December'
);

$x = GetDate();
$dagVandaag = $dagen[$x['wday']];
$maandVandaag = $maanden[$x['mon'] - 1];

if ($x['mday'] < 10) {
    $dagVandaag2 = 0 . $x['mday'];
} else {
    $dagVandaag2 = $x['mday'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
    <p>Het is vandaag: <?php echo $dagVandaag .
        ' ' .
        $dagVandaag2 .
        ' ' .
        $maandVandaag .
        ', ' .
        $x['year']; ?></p>
</body>
</html>
