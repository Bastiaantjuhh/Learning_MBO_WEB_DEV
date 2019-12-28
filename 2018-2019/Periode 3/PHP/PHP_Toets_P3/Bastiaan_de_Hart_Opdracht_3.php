<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 3</title>
</head>
<body>
    <?php
    function toUpperCase($arrayAsInput)
    {
        $a = strtoupper($arrayAsInput[0]);
        $b = strtoupper($arrayAsInput[1]);
        $c = strtoupper($arrayAsInput[2]);
        $d = strtoupper($arrayAsInput[3]);

        return array($a, $b, $c, $d);
    }

    function test()
    {
        if (function_exists('toUpperCase')) {
            $a = implode(toUpperCase(array('Dit', 'is', 'een', 'test')));
            echo $a === 'DITISEENTEST' ? 'OK' : 'FOUT';
        } else {
            echo "Function toUpperCase bestaat niet";
        }
    }

    test();
    ?>
</body>
</html>