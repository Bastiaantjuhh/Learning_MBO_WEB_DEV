<?php
class Cirkel implements Berekenen
{
    private $diameter;

    public function __construct($diameter)
    {
        $this->diameter = $diameter;
    }

    public function oppervlakte()
    {
        $omtrek = $this->diameter / 2;
        return $omtrek * $omtrek * pi();
    }

    public function omtrek()
    {
        return $this->diameter * pi();
    }
}
?>
