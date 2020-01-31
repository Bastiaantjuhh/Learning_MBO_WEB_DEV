<?php
class GokkastLib
{
    private $rollen; //aantal rollen
    private $nummers; //aantal verschillende plaatjes op een rol
    public $won; //gewonnen ja/nee

    /**
     * Constructor
     * @param [int] $rollen [Aantal rollen op de gokkast]
     * @param [int] $nummers [Aantal verschillende plaatjes op een rol]
     */
    public function __construct($params)
    {
        $this->rollen = $params["rollen"];
        $this->nummers = $params["nummers"];
    }

    /**
     * Bepaalt de waarde van de rollen
     * @return [array] [array met rollen]
     */
    public function slotnumbers()
    {
        // initialiseer
        srand(time());

        for ($i = 0; $i < $this->rollen; $i++) {
            $random = rand() % $this->nummers; //Komt altijd terug met 0,1,2,...
            $slot["rol" . $i] = $random; //Stop de waarde in een array
        }
        //Als alle waarden gelijk zijn, dan heb je gewonnen
        $unique = array_unique($slot);
        $this->won = count($unique) == 1;

        return $slot;
    }
}
