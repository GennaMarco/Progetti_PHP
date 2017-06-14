<!DOCTYPE html>
<html>
<head>
	<title>Inserisci il codice</title>
</head>
<body>

<?php 
include 'config.php';
	$random = rand (1000,9999);

?>
<p>Indovina il codice SEGRETO da inserire: <h6><?php if(MOSTRASUGGERIMENTI) echo "psss. ".$random;?></h6></p>

<form method="POST" action="verificacodice.php">
<label>Scrivi qui il codice:</label>
<input type="text" name="codice" />
<button type="submit" value="Submit">Verifica codice</button>
<input type="hidden" name="codsegreto" value="<?=$random?>" />

</form>

</body>
</html>