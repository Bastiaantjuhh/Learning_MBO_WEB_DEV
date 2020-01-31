<?php
class Rechthoek implements IBerekenen
{
    private $lengte = 0;
    private $breedte = 0;

    public function __construct(array $formData)
    {
        $this->lengte = $formData['length'];
        $this->breedte = $formData['width'];
    }

    public function omtrek()
    {
        try {
            return 2 * $this->breedte + 2 * $this->lengte;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function oppervlakte()
    {
        try {
            return $this->breedte * $this->lengte;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
