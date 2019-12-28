<?php
class Sport
{
    //public $spelregel;

    public $spelregels = "Hello World";

    function __construct()
    {
    }
}

class Voetbal extends Sport
{
}

$s = new Voetbal();

echo $s->spelregels;

/*
Encapsulatiosation, Public and Private
Abstration. 
Inherantance, Extends
Polymorephysim, 
*/

// Parent::
