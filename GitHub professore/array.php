<!DOCTYPE html>
<html>
<head>
	<title>Vettori</title>
</head>
<body>
<pre>

<?php 

     $numeri = array(10,15,20);   // tipo un vettore, parte dalla posizione 0
         echo $numeri[0];      // 10
         echo $numeri[1];      // 15
         echo $numeri[2];      // 20
         echo "</br>";

         $testi = array("stefano", "simone", "lorenzo");
         $misto = array("stringa", 10, true, array(1,2));
         
         echo ($misto[1]);  // stampa 10, posizione 1
         echo "</br>";

         echo ($misto[0]);  // stampa stringa, posizione 0
         echo "</br>";

         echo ($misto[2]);  // stampa 1(true), posizione 2
         echo "</br>";
         
         echo ($misto[3][1]);  //  stampa 2 di array(1,2), posizione 3 e posizione 1 dell'array
         echo "</br>";

         echo print_r($misto);  // il print_r è utilizzato con il <pre>, per una migliore visualizzazione degli array dove [] indica la posizione

?>
<pre>
</body>
</html>