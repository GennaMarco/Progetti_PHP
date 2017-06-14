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
	font-size: 1.3em;
	width: auto;
	height: 10%;
	border: 1px dotted red;
	margin: auto;

}



</style>
</head>
<body>

<?php

$numeri = ["prima riga" => [1, 2, 3], "seconda riga" =>[4, 5, 6], "terza riga" => [7, 8, 9]];
//shuffle($numeri);

while(list($chiave, $valore) = each($numeri))
{
	echo "<h1>";
	echo "\$numeri[$chiave] $chiave <br/>";
	echo "</h1>";
	echo "<h2>";
	print_r($valore);   // è una funzione che mi stampa a video il contenuto dell'array
	echo "</h2>";


}
?>

</body>
</html>