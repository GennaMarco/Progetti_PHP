<?php 

/*	$saluto = "ciao";
	echo "il mio saluto è $saluto";
	echo 'il mio saluto è {$saluto}';*/
	//echo $_GET['pagina'];
	//$a = $_GET['pagina'];	
	//qui ricevo la variabile passata via GET

	switch($_GET['pagina']){

		 case "uno":
			//creaHeader('ciao');
			echo calcolaValori(12, 0, 'divisione');

			echo $_SERVER['SCRIPT_FILENAME'];
			echo '<br>';
			echo $_SERVER['REMOTE_HOST'];
			echo '<br>';
			echo $_SERVER['REMOTE_USER'];

			$lunghezza = count($_SERVER);

			foreach ($_SERVER as $key => $value) 
			{
				echo $key
					." "
					.$value
					."<br>";
			}
		break;

		case "due":
			echo "<h1>Corso php</h1>";
			echo "<h2>Elementi del linguaggio</h2>";

			if($_GET['argomento'] == 'variabili')
				include 'Variabili.php';
			if($_GET['argomento'] == 'cicli')
				include 'cicliWhile.php';
			if($_GET['argomento'] == 'array')
				include 'array.php';
			if($_GET['argomento'] == 'array_associativi')
				include 'array_associativi.php';
			if($_GET['argomento'] == 'condizioni')
				include 'condizioni.php';

				
		break;
		
		case "studenti":
              
            include 'dettaglio.php';

			
		break;
		
		case "giochi":
			//include "giochi_lanciaDadi.php";
			include "giochi_lanciaDadiPost.php";
		break;

		case "calcoli":

		    include "calcolatrice.php";

		  break;
		default:
			
			echo "Ti trovi nella home";
	}
 ?>
