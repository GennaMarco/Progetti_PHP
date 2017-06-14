<!DOCTYPE html>
<html>
<head>
	<title>Verifica codice</title>
</head>
<body>

<?php

//SE ESISTE codice passato da index.php ed è uguale a 		QWERTY vai a pagina dopo o scrivi messaggio di errore
if(isset($_POST['codice']) && $_POST['codice']==$_POST['codsegreto'])
	header("location: login.php");
else
	{
		echo "<h1>Sei un cane non sai leggere !</h1>";
		echo "<a href='index.php'>Clicca per riprovarci</a>";
	}







?>

</body>
</html>