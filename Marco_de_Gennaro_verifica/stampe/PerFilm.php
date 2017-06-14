<?php 
	session_start();

	include '../funzioni.php';

	foreach ($_SESSION as $film) 
		if($film[2] == "film")
			$arrayFilm[] = $film;
	
	StampaArrayFilmSerietv($arrayFilm);
	echo "<p>
 			<a href=\"../index.php\">Torna alla schermata precedente</a>
		  </p>";

 ?>