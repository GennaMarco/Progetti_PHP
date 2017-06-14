<link rel="stylesheet" type="text/css" href="css/style.css">
<?php 
	session_start();
	include 'funzioni.php';
	$paginaRedirect = "index.php";
	
	if(!empty($_SESSION['partite']))
	{
		if(!empty($_SESSION['classifica']))
			$_SESSION['classifica'] = ResetArrayRanking($_SESSION['classifica']);

		asort($_SESSION['partite']);
		echo "<div><fieldset><p>";
		echo "<h1 class=\"title\">RISULTATI PARTITE</h1>";
		foreach ($_SESSION['partite'] as $partita)
		{
			echo "<p>".$partita[0]." ".$partita[1]." - ". $partita[3]." ".$partita[2]."</p>";
			$_SESSION['classifica'] = ProcessRankPointsAtRanking($_SESSION['classifica'], $partita[1], $partita[3], $partita[0], $partita[2]);
		}
		echo "</p></fieldset></div>";

		arsort($_SESSION['classifica']);
		echo "<div><fieldset>";
	    echo "<h1 class=\"title\">CLASSIFICA</h1><br>";
	    $rank = 0;
	    $pointsPrev = -1;
		foreach ($_SESSION['classifica'] as $team => $points)
		{
			if($pointsPrev != $points)
				$rank++;
			echo "<h2>".$rank." ( ".$team." ".$points." points )</h2><br>";
			$pointsPrev = $points;
		}
					
		echo "</fieldset></div>";
	}
	else
	{
		$_SESSION['message'] = "Errore! non sono presenti partite!";
		header("Location: ". $paginaRedirect);
	}
 
?>

