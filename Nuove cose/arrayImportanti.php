<html>
<head>
	<title></title>
<style type="text/css">

body
{
	max-width: 1024px;
	background-color: orange;
	padding: auto;
}

h1
{
	text-align: center;
	font-size: 10em;
	width: 12em;
	height: 12em;
	border: 1px dotted red;
	margin: auto;

}



</style>

</head>
<body>

<?php 


// inizializzo un array e aggiungo un valore in coda
$a[] = 5;

echo count($a)."<br>";

// inizializzo array con la keyword array()
$a = array(75, 121 , 10, "pistacchio", 22.09);

$a[] = 5;

$somma = 0;

foreach($a as $value)
   echo $somma = $somma + $value."<br>";

// applico la funzione per contare i valori dell'array
echo count($a)."<br>";


// array associativo
$voti = array("gino" => 7.5, "piero" => 5.8, "gigi" => 6.99);
echo count($voti)."<br>";




//scorrere foreach con array associativo
$b = array("primo" => 75 ,"secondo" => 121, 6=>300, 10, "pistacchio", "centesimo" => 22.99);

foreach($b as $chiave => $valore)
{
	if(is_int($chiave))
		echo "La chiave è un intero! \$b[$chiave] = $valore<br>";
	else 
		echo "\$b[\"$chiave\"] = $valore<br>";

}

$somma = 0;
$voti = array("primo" => 7.5, "secondo" => 7.1, 6.5, 8.5, "tizio" => 10, "pistacchio" => 4.5, "centesimo" => 9.75);


foreach($voti as $studente => $voto)
{
	echo "$studente = $voto <br/ >";
	$somma = $somma + $voto;
}

echo "<h2> media :". $somma/count($voti)."</h2>";


// array multidimensionali
$a = 0;
//$a[][] = "prova1";
//$a[][] = "prova2";

//$a[][] = "prova3";
//$a[][] = "prova4";



$calendario = array(
     array("", "Lunedi", "martedi", "mercoledi", "giovedi", "venerdi", "sabato", "domenica"),
     array("mattino", "", "", "PHP Programming"), 
     array("pomeriggio", "", "", ""), 
     array("sera", "", "", ""), 
     array("notte", "", "", ""), 
	);



$choice = ["si", "no", "ci penso"];
shuffle($choice);

echo "<h1>";
echo $choice[0];
echo "</h1>";

echo "<table>";
for ($i=0; $i < count($calendario); $i++) 
{
	// stampo la riga
	echo "<tr>";
	
	for ($j=0; $j < count($calendario[$i]) ; $j++)     // count($a[$i])  conta gli elementi della riga
	{
	   // stampo la colonna 
	   echo "<td>";	
	   echo $calendario[$i][$j]; 
	   echo "</td>";
	} 
	echo "</tr>";
}

echo "</table>";




?>

</body>
</html>