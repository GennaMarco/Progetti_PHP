<?php 
	session_start();
	//session_destroy();
	include '../funzioni.php';

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	foreach ($_SESSION as $film1) 
	{
		foreach ($_SESSION as $film2) 
		{
			if($film2[3] > $film1[3])
			{
				//echo $_SESSION[$film1[0]];
				$arrayTemp = $_SESSION[$film1[0]];
				$_SESSION[$film1[0]] = $_SESSION[$film2[0]];
				$_SESSION[$film2[0]] = $arrayTemp;		
			}
		}
	}
	echo "<br><br>";
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	echo "<p>
 			<a href=\"../index.php\">Torna alla schermata precedente</a>
		  </p>";


 ?>