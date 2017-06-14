<?php session_start();  ?>
<html>
<head>
	<title>Form Film e Serie TV</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
		<form method="POST" action="processing_form.php">

				<p>
					Titolo del film: 
					<input type="text" name="title_name" placeholder="inserisci film o serie tv">
				</p>
				<p>
					Genere: 
					<select name="genere">
						<option value="azione">azione</option>
						<option value="romantico">romantico</option>
						<option value="horror">horror</option>
						<option value="commedia">commedia</option>
						<option value="fantasy">fantasy</option>
						<option value="thriller">thriller</option>
					</select>
				</p>
				<p>
					Tipologia: 
					<select name="tipologia">
						<option value="film">film</option>
						<option value="serie_tv">serie tv</option>
					</select>
				</p>
				<ul class="radiobuttons">
				 		Valutazione:
						<li>
					        <input type="radio" name="valutazione" value="uno">1</input>
					    </li>
			            <li>
					        <input type="radio" name="valutazione" value="due">2</input>
					    </li>
					    <li>
					        <input type="radio" name="valutazione" value="tre">3</input>
					    </li>
					    <li>
					        <input type="radio" name="valutazione" value="quattro">4</input>
					    </li>
					    <li>
					        <input type="radio" name="valutazione" value="cinque">5</input>
					    </li>
				</ul>
		       	<p class="btn">
					<button type="submit" name="send">Invia</button>
				</p>

				<?php 

				if(isset($_SESSION['message'])) 
				{
					$message = $_SESSION['message'];
					unset($_SESSION['message']);
					if($message[0] == "C")
				 	echo "<div class=\"alert\">
  							<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>". 
  							$message.
						  "</div>";
					else
						echo "<div class=\"success\">
  							<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>". 
  							$message.
						  "</div>";
				}
					?>
				<p>
			 		<a href="stampe/PerTitolo.php">Stampa tutti i film e serie tv ordinati per titolo</a>
				</p>
				<p>
			 		<a href="stampe/PerFilm.php">Stampa solo i film</a>
				</p>
				<p>
			 		<a href="stampe/PerSerie.php">Stampa solo le serie tv</a>
				</p>
		   <!-- <p>
			 		<a href="stampe/PerValutazione.php">Stampa film e serie tv dalla valutazione più alta</a>
				</p>
			-->
		</form>

		
	
</body>
</html>