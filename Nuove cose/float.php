<!DOCTYPE html>
<html>
<head>
	<title>floating point numbers</title>
</head>
<body>

<?php 
    
    define('PIGRECO', 3.14);  // definire una costante

    echo $float = 3.14;
    echo "<br>";
    echo $float + 7;
    echo "<br>";
    
    echo 5/3;
    echo "<br>";


    echo round($float);
    echo "<br>";
    echo ceil($float);
    echo "<br>";
    echo floor($float);

    $intero = 12;

    echo "è intero il numero " . is_int($intero);
    echo "<br>";
    echo "è floatil numero " . is_float($intero);
    echo "<br>";
    echo "è intero il numero " . is_float($float);
    $raggio = 5;

    echo "L'area del cerchio di raggio 5 è uguale a: ". PIGRECO * $raggio * $raggio;

    echo "<br>";
    echo "Faccio il casting ";
    $float = (string)$float;
    echo $float;

    $string = "";
    if($string) echo "vuoto";
    $string = "ciao";

    echo $string[0];



 ?>







</body>
</html>