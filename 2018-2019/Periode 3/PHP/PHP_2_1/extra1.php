<?php
$text = "De zin bevat waarschiijnlijk minstens een letter r";
$search_char = "r";
$count = 0;

for ($x = 0; $x < strlen($text); $x++) {
    if (substr($text, $x, 1) == $search_char) {
        $count = $count + 1;
    }
}
echo $count . "\n";
?>
