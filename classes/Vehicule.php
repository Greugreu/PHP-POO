<?php

abstract class Vehicule
{
    public $masse;
    public $vitesse;
    public $conso;
    public $carbu;

    public function calculerEnergieCinetique()
    {
        return 0.5 * $this->masse * ($this->vitesse ** 2);
    }

    public function calculerDistanceRestante()
    {
        return ($this->carbu - ($this->carbu * 0.05)) / $this->conso;
    }
}