<?php 
	session_start();
	unset($_SESSION['user']);
	$paginaRedirect = "../sign_in_up.php";
	header("Location: ". $paginaRedirect);

?>