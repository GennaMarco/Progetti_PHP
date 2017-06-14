<?php 
	
	session_start();

	include '../funzioni.php';

	foreach ($_SESSION as $serie) 
		if($serie[2] == "serie_tv")
			$arraySerie[] = $serie;
	
	StampaArrayFilmSerietv($arraySerie);
	echo "<p>
 			<a href=\"../index.php\">Torna alla schermata precedente</a>
		  </p>";


 ?>