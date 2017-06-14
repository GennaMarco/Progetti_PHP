<?php 
	session_start();
	
	$paginaRedirect = "index.php";
	include 'funzioni.php';

	$title = (isset($_POST['title_name']) ? $_POST['title_name'] : "");
	$genere = (isset($_POST['genere']) ? $_POST['genere'] : "");
	$tipologia = (isset($_POST['tipologia']) ? $_POST['tipologia'] : "");
	$valutazione = (isset($_POST['valutazione']) ? $_POST['valutazione'] : "");
	$IsEsistente = false;

	if($title != "" && $valutazione != "" && $genere != "" && $tipologia != "")
	{
		$title = ucfirst($title);
		foreach($_SESSION as $f) 
		{
			if($title == $f[0])   // controllo se ci sono film con lo stesso titolo, se ci sono calcola la media
			{
				$arrayMedia[] = $f[3];
			 	$arrayMedia[] = CalcolaValutazione($valutazione); 
				$_SESSION[$title][3] = CalcolaMedia($arrayMedia);
				$_SESSION[$title][4]++;
				$IsEsistente = true;
				break;
			}
		}
		if(!$IsEsistente)    // se non vi è nessun film di quel titolo, allora lo aggiunge
			$_SESSION[$title] = array($title, $genere, $tipologia, CalcolaValutazione($valutazione), 1);

		$_SESSION['message'] = "Valutazione del film aggiunta con successo!";
	  	header("Location: ". $paginaRedirect);
	}
	else
	{
		$_SESSION['message'] = "Controllare titolo e valutazione";
	  	header("Location: ". $paginaRedirect);
	}
	

 ?>
 	
 	
