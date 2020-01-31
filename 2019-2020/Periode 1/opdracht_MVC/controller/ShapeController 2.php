<?php
class ShapeController
{
    private $inputData; // Array
    private $outputData; // Array
    private $view; // String

    public function __construct($inputData)
    {
        $this->inputData = $inputData;
        $this->outputData = ['oppervlakte' => '', 'omtrek' => ''];
        $this->view = 'ui';
    }

    public function calculate()
    {
        if (isset($this->inputData['shape'])) {
            try {
                $class = $this->inputData['shape'];
                $shape = new $class($this->inputData);
            } catch (Exception $e) {
                throw new Exception(
                    'Niet de juiste informatie voor berekening (' .
                        $e->getMessage() .
                        ')'
                );
            }

            // Bereken de oppervlakte en de omtrek
            $oppervlakte = $shape->oppervlakte();
            $omtrek = $shape->omtrek();
            $this->outputData = [
                'oppervlakte' => $oppervlakte,
                'omtrek' => $omtrek
            ];

            // Welke view voor het antwoord
            $this->view = 'ui';
        }
    }

    public function getOutputData(): array
    {
        return $this->outputData;
    }

    public function getView(): string
    {
        return $this->view;
    }
}
