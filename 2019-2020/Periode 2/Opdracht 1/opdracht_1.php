<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);
*/

function stringReverse($str)
{
    $arr = str_split($str);
    $revStr = '';
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $revStr .= $arr[$i];
    }
    return $revStr;
}

function palindroom($str)
{
    return $str === stringReverse($str);
}

function highest($arr)
{
    $max = 0;
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

function arraysum($arr)
{
    $counter = 0;
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if (gettype($arr[$i]) === 'integer' || gettype($arr[$i]) === 'double') {
            $counter += $arr[$i];
        }
    }
    return $counter;
}

function wordtocase($str)
{
    $arr = explode(' ', $str);
    $res = '';
    for ($i = 0; $i < count($arr); $i++) {
        $temp = str_split($arr[$i]);
        $temp[0] = strtoupper($temp[0]);
        $res .= implode($temp) . ' ';
    }
    return $res;
}

function countchars($str, $char)
{
    $arr = str_split($str);
    $counter = 0;
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] === $char) {
            $counter++;
        }
    }
    return $counter;
}

function tous($str)
{
    $arr = explode(':', $str);
    $suffix = $arr[0] - 12 <= 0 ? 'PM' : 'AM';
    if ($suffix === 'AM') {
        $arr[0] = $arr[0] - 12;
    }
    return $arr[0] . ':' . $arr[1] . $suffix;
}

function countints($arr)
{
    $res = [];
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if (isset($res[$arr[$i]])) {
            $res[$arr[$i]]++;
        } else {
            $res[$arr[$i]] = 1;
        }
    }
    return $res;
}

class Cylinder
{
    private $r;
    private $h;

    public function __construct($r, $h)
    {
        $this->r = $r;
        $this->h = $h;
    }

    public function getvolume()
    {
        return M_PI * pow($this->r, 2) * $this->h;
    }
}

// Opdracht 1
echo stringReverse('loopscoop');
echo '<br/>';

// Opdracht 2
var_dump(palindroom('loll'));
echo '<br/>';

// Opdracht 3
echo highest([0, 100, 1, 5, 2]);
echo '<br/>';

// Opdracht 4
echo arraysum([0, 100, 1, 5, 2]);
echo '<br/>';

// Opdracht 5
echo wordtocase('ik wil gewoon kaas ik ben ook een klant');
echo '<br/>';

// Opdracht 6
echo countchars('test Test TesT', 't');
echo '<br/>';

// Opdracht 7
echo '6:43' . ' to: ' . tous('6:43');
echo '<br/>';

// Opdracht 8
var_dump(countints([122, 122, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 122, 122]));
echo '<br/>';

// Opdracht 9
$cy = new Cylinder(4, 10);
echo $cy->getvolume();
