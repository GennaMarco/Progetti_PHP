<?php 
	session_start(); 
	include 'config.php';

	$username = (isset($_POST['user']) ? $_POST['user'] : "");
	$password = (isset($_POST['pass']) ? $_POST['pass'] : "");

	$cookie_name = $username;
	$cookie_value = $username;
	$cookie_time = time() + $time;

	if($username != "" && $password != "")
	{
		for ($i=0; $i < count($credenziali); $i++) 
		{ 
			if($username == $credenziali[$i]['username'] && $password == $credenziali[$i]['password'])
			{
				if(isset($_COOKIE[$cookie_name]))
				{
					echo "Bentornato $username, tutto bene?";
				}
				else
				{
					echo "Benvenuto $username, è il tuo primo login!";
					setcookie($cookie_name, $cookie_value, $cookie_time);
				}
				break;
			}
			else if($i+1 == count($credenziali))
			{
				$_SESSION['message'] = "Errore! username o password errati";
			  	header("Location: ". $paginaRedirect);
			}
		}
	}
	else
	{
		$_SESSION['message'] = "Completare i due campi!";
	  	header("Location: ". $paginaRedirect);
	}

 ?>