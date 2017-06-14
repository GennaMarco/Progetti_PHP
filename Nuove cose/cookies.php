<?php 

     $nome = "test";
     $valore = null;
     $scadenza = time() + (60 * 60 * 24 * 7 );
     setcookie($nome, $valore, $scadenza);      // 1° argomento: nome, 2° argomento: valore del cookie, 3° argomento: durata del cookie


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
<h1>test cookie</h1>
<pre>

<?php //print_r($_COOKIE); ?> 

</pre>
	
<?php  


$test = isset($_COOKIE['test'])? $_COOKIE['test'] : ""; 






?>
<h1><?php echo $test ?></h1>

</body>
</html>