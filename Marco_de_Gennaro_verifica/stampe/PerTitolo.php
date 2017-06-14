<?php 
	session_start();

	include '../funzioni.php';
	asort($_SESSION);   // ordinamento per titolo

	StampaArrayFilmSerietv($_SESSION);
	echo "<p>
 			<a href=\"../index.php\">Torna alla schermata precedente</a>
		  </p>";


 ?>
 	