<?php 
	session_start();

	if(isset($_POST['btnLogin'])) 
    {
      	include 'database.php';
      	include 'queries.php';

      	$mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME);

      	$paginaRedirect = "../sign_in_up.php";

	    $username = mysqli_real_escape_string($mysqliConnection, $_POST['username']);
	    $password = mysqli_real_escape_string($mysqliConnection, $_POST['password']);

	    $username = $_POST['username'] != ""? $username : "";
	    $password = $_POST['password'] != ""? $password : "";

		if($username != "" && $password != "")
	    {
			$propertyResult = SelectPasswordByUsername($username);
			$password_correct = null;
			if($propertyResult->num_rows == 1)
			{
		    	$objresult = mysqli_fetch_object($propertyResult);
				$password_correct = $objresult->Password;
			}

		  	if(sha1($password) == $password_correct)
		  	{
	          $_SESSION['user'] = $username;
	          $paginaRedirect = "../index.php";
		  	}
	        else
        	  $_SESSION['message'] = "nome utente o password errati";
	    }
	    else
          $_SESSION['message'] = "Errore! Controllare che i campi non siano vuoti";

        header("Location: ". $paginaRedirect);  
  	}
    
?>