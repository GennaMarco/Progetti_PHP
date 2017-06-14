<?php 
include 'Automobile.php';

$marche = ["Fiat", "BMW", "Audi"];

$colori = ["Rosso", "Verde", "Blu", "Nero"];

$modelli = [ ["500", "Punto", "Panda"] , ["X1", "M3", "i8"] , ["R8", "A8", "TT"] ]; // Array di array di modelli(multidimensionale)

$suaAuto = new Automobile("Fiat", "Nuova Tipo", 2000, "Beige");

$concessionario = array();

echo $suaAuto->StampaOggetto();

for ($i=0; $i < 100; $i++) 
{ 
	$marca = $marche[array_rand($marche)];                   //array_rand ritorna l'indice dell'array(posizione)
	$num = array_search($marca, $marche);                    // array_search (non ho capito come funzione GUARDA INTERNET)
	$modello = $modelli[$num][array_rand($modelli[$num])];    //array multidimensionale
	$colore = $colori[array_rand($colori)];

	$concessionario[] = new Automobile($marca, $modello, rand(1000, 3000), $colore);
}

echo "<pre>";
print_r($concessionario);
echo "</pre>";





 ?>