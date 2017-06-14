<?php 

if(isset($_COOKIE['utente'])){
	$user = $_COOKIE['utente'];
	if(isset($_SESSION))
	{
		if(isset($_SESSION[$user]))
		{
			$_SESSION[$user]++;
		}	
		else
			$_SESSION[$user]=1;

	}
	else
	{
		session_start();
		$_SESSION[$user]=1;
	}

	setcookie('utente',$user,time()-3600);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Complimenti <?=$user?> hai fatto un punto</title>
 </head>
 <body>
 
	<h1>Complimenti <?=$user?> hai fatto un punto</h1>
	<h2>I tuoi punti totali sono <?=$_SESSION[$user]?></h2>
	<h2><a href="index.php">Nuovo giro</a></h2>

 </body>
 </html>

 <?php

 }

 else {

 	?>

 	 <!DOCTYPE html>
 <html>
 <head>
 	<title>Errore</title>
 </head>
 <body>
 
	<h1>Hai già staccato il biglietto</h1>
	<h2><a href="index.php">Torna indietro</a></h2>

 </body>
 </html>

 	<?php
 }

 
 ?>