<?php
$xa = 0;
$ya = 200;
$xb = 0;
$yb = 0;

function Perc($Input)
{
    return $Input / 12.5;
}
?>
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <line x1="<?php echo $xa; ?>" y1="<?php echo $ya; ?>" x2="<?php echo $xb; ?>" y2="<?php echo $yb; ?>"
          style="stroke:rgb(255,0,0);stroke-width:2"/>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <line x1="<?php echo $xa; ?>" y1="<?php echo Perc(
    $ya
); ?>" x2="<?php echo $xb; ?>" y2="<?php echo $yb; ?>"
          style="stroke:rgb(255,0,0);stroke-width:2"/>
</svg>
