<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Processing del signin</title>
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

    $paginaRedirect="signin.php";

    $username = mysqli_real_escape_string($mysqliConnection, $_POST['username']);
    $password = mysqli_real_escape_string($mysqliConnection, $_POST['password']);

    $username = $_POST['username'] != ""? $username : "";
    $password = $_POST['password'] != ""? $password : "";

    $password = sha1($password);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if($_POST['username'] != "" && $_POST['password'] != "")
        $propertyResult = mysqli_query($mysqliConnection, $sql);

  	if(isset($_POST['signin']) && ($_POST['username'] != "" && $_POST['password'] != ""))
      echo include "RegistrazioneSuccesso.php";
    else
      echo "Errore!";
?>

</body>
</html>