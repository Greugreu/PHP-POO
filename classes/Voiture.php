<?php

class Voiture extends Vehicule
{
    public $couleur;
    public $marque;
    public $reservoir;
    //public $qteCarburantRestant;
    //public $consomationInstantanee;

    public function __construct($couleur, $carbu)
    {
        $this->couleur = $couleur;
        $this->reservoir = $carbu;
    }

    public function afficherMessageALaCon()
    {
        echo "Message inutile";
    }

    public function peindlaVoiture($couler)
    {
        $this->couleur = $couler;
    }

    public function calculerKmRestant($qterestante, $conso)
    {
        $reserve = $this->carbu * 5/100;
        return ($qterestante - $reserve) / $conso * 100;
    }

    public function __destruct()
    {
        echo "Ich bin tot !";
    }
}