<?php session_start();
	  include 'config.php';
	  include 'funzioni.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Calcio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="form-messagebox">
		<fieldset>
			<form method="POST" action="processing_form.php" class="form">
				<p>
					Squadra casa:&nbsp&nbsp
					<select name="squadra1">
					<?php foreach($squadre as $squadra) 
						  {
						     echo "<option value='$squadra'>$squadra</option>";
					      } 
					      ?>
					</select>
					<input type="number" name="punteggio1" value="0" min="0">
				</p>


				<p>
					Squadra ospiti:
					<select name="squadra2">
					<?php foreach($squadre as $squadra) 
						  {
							 echo "<option value='$squadra'>$squadra</option>";
				          } 
				          ?>
					</select>
					<input type="number" name="punteggio2" value="0" min="0">
				</p>

				<p class="btn">
					<button type="submit" name="send">Invia</button>
				</p>

				<p>
					<a href="risultati.php">Stampa le partite e la classifica</a>
				</p>
			</form>
		</fieldset>
		<?php ShowMessageBoxCustom(); ?>
	</div>

</body>
</html>