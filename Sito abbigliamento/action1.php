<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Processing del login</title>
</head>
<body>

<?php
    
    define('DB_HOST', "localhost");
    define('DB_USERS', "root");
    define('DB_PASS', "");
    define('DB_NAME', "abbigliamento");

    $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME);

    if(mysqli_connect_errno())
    {
      printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
      exit();
    }

    $paginaRedirect="login.php";

    $username = mysqli_real_escape_string($mysqliConnection, $_POST['username']);
    $password = mysqli_real_escape_string($mysqliConnection, $_POST['password']);

    $username = $_POST['username'] != ""? $username : "errore";
    $password = $_POST['password'] != ""? $password : "errore";


    $sql = "SELECT password FROM users WHERE username = '$username'";

    $propertyResult = mysqli_query($mysqliConnection, $sql);
    
    $objresult = mysqli_fetch_object($propertyResult);

    $pass = $objresult->password;

  	if(isset($_POST['login']))
  	{
       if(sha1($password) == $pass)
          include "capiAbbigliamento.php";
       else
          header("Location: ". $paginaRedirect);
    }
    else
      echo "Errore!";
?>

</body>
</html>