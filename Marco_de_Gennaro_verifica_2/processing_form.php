<?php 

	session_start();
	
	$paginaRedirect = "index.php";

	$squadra1 = $_POST['squadra1'];
	$squadra2 = $_POST['squadra2'];
	
	$punteggio1 = $_POST['punteggio1'];
	$punteggio2 = $_POST['punteggio2'];

	if(is_numeric($punteggio1) && is_numeric($punteggio2))
	{
		if($squadra1 == $squadra2)
		{
			$_SESSION['message'] = "Errore! Controllare che le squadre non siano uguali";
			header("Location: ". $paginaRedirect);
		}
		else
		{
			$_SESSION['partite'][$squadra1."-".$squadra2] = array($squadra1, $punteggio1, $squadra2, $punteggio2);
			$_SESSION['message'] = "Valori della partita aggiunti con successo!";
			header("Location: ". $paginaRedirect);
		}
	}
	else
	{
		$_SESSION['message'] = "Errore! controllare che i punteggi non siano vuoti";
		header("Location: ". $paginaRedirect);
	}

 ?>