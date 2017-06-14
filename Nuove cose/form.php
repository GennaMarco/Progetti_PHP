<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form per invio dati</title>
</head>
<body>

<?php  if(!$_SESSION['username']) { ?>
<form method="post" action="form_processing.php">        <!-- action serve per andare alla pagina inserita dopo l'uguale -->

Nome utente: <input type="text" name="username" value=""><br><br>

Password   : <input type="password" name="password" value=""><br><br>

<input type="submit" name="submit" value="Fai login">

</form>

<?php } ?>
<?php echo $_SESSION['username']; ?>

</body>
</html>