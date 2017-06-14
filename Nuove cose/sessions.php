<?php session_start(); // la sessione è un informazione simile al cookie, ma si salva nel lato server ?>
<!DOCTYPE html>
<html>
<head>
	<title>sessioni</title>
</head>
<body>


<?php 
     $nome = $_SESSION['nome'] = "mauro";  // questo $_SESSION['nome'] = mauro;    è stato memorizzato sul server 

     echo $nome;
?>


</body>
</html>