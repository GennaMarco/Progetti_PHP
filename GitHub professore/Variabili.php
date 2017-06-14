<!DOCTYPE html>
<html>
<head>
	<title>Varie istruzioni</title>
	<?php  $nome = 15; ?>
</head>
<body>


<?php  $saluto = "ciao"; ?>
<?php  $nome = "Mauro"; ?>
<?php // questo è su un commento su una linea $nome = 15; ?> 
<h1>
	<?php  echo ucfirst($saluto." caro ".strtoupper($nome));     // Per fare lo spazio ho utilizzato " " ?>
</h1>
<?php 
    
    $frase1 = "   sempre caro mi fu       ";
    $frase2 = "       ei fu siccome immobile dato il mortal sospiro      ";
    $frase3 = trim($frase1);

    echo "la frase 1 conta " .  strlen($frase1) . " caratteri";  // conta la lunghezza della stringa(caratteri)
    echo "</br>";
    
    echo "la frase 3 conta " .  strlen($frase3) . " caratteri";
    echo "</br>";     // equivale allo \n in c, va a capo
    $differenza_caratteri = strlen($frase1) - strlen($frase3);
    
    echo "la differenza è " . $differenza_caratteri . " caratteri" ;
    echo "</br>";

    $email  = 'name.example.com';
    $domain = strstr($email, '@');    // trova il carattere '@' nella variabile $email e se lo trova stampa tutti i caratteri successivi
    echo $domain;                     // prints @example.com

    $frase4 = $frase1.$frase2;
    echo "</br>";
    echo "la frase 4 conta " .  strlen($frase4) . " caratteri";

    echo "</br>";
    echo str_replace("o", "1", $frase4);  // sostiuisce la 'o' con '1'

    $frase5 = "44 gatti in fila per 6 col resto di 2 ";

    echo "</br>";
    echo "la frase 5 conta " . strlen($frase5) ." caratteri";

    echo "</br>";
    echo $frase5 = str_replace("44","quarantaquattro", $frase5); // sostituisce '44' con 'quarantaquattro'

    echo "</br>";
    echo "la frase 5 conta " .  strlen($frase5) . " caratteri";

    echo "</br>";
    echo substr($frase5, 20, 50); // realizza una sottostringa che parte dal 20esimo carattere al 70esimo ( 20+50 )
    echo "</br>";

    echo "la posizione del numero 6 è: ". strpos($frase5, "6");    // rileva la posizione di '6' nella stringa, in questo caso 34esima posizione

    $numeri = array(10,15,20);   // tipo un vettore, 

?>

</body>
</html>