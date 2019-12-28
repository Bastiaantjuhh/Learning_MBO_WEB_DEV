<?php
class Vierkant implements Berekenen
{
    private $lengte;
    private $breedte;

    public function __construct($lengte, $breedte)
    {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
    }

    public function oppervlakte()
    {
        return $this->lengte * $this->breedte;
    }

    public function omtrek()
    {
        return $this->lengte + $this->breedte * 2;
    }
}
?>
