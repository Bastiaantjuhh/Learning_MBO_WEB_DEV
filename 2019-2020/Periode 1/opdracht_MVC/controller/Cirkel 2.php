<?php
class Cirkel implements IBerekenen
{
    private $diameter = 0;

    public function __construct(array $formData)
    {
        $this->diameter = $formData['diameter'];
    }

    public function omtrek()
    {
        //pi * d
        try {
            return $this->diameter * M_PI;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function oppervlakte()
    {
        //d * d * PI / 4
        try {
            return ($this->diameter * $this->diameter * M_PI) / 4;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
