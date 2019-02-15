<?php
include "./classes/Vehicule.php";
include "./classes/Voiture.php";
include "./classes/Paresoleil.php";
include "./classes/Coupe.php";
include "./functions/debug.php";

$gerard = new Voiture("jaune", 80);

$gerard->marque = "Renault Fuego";
$gerard->afficherMessageALaCon();
debug ($gerard);

$gerard->peindlaVoiture("Ver");
debug ($gerard);

$gerard->vitesse = 30;
$gerard->masse = 1075;
debug ($gerard);

//$gerard->conso = 0.15;
//$gerard->carbu = 80;
debug ($gerard);

echo $gerard->calculerEnergieCinetique() . " Joules<br />";

echo $gerard->calculerKmRestant(80, 15) . " Km<br />";

$caisse = new Coupe("rouge", 70);
$caisse->setMessage("Forever Forever ");
echo $caisse->getMessage();
debug ($gerard);