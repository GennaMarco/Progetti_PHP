<?php
    session_start();

    if(isset($_POST['btnRegistra'])) 
    {
        include 'database.php';
        include 'queries.php';

        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME);

        $paginaRedirect = "../sign_in_up.php";

        $username = mysqli_real_escape_string($mysqliConnection, $_POST['username']);
        $email = mysqli_real_escape_string($mysqliConnection, $_POST['email']);
        $password = mysqli_real_escape_string($mysqliConnection, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($mysqliConnection, $_POST['confirm-password']);

        $username = $_POST['username'] != ""? $username : "";
        $email = $_POST['email'] != ""? $email : "";
        $password = $_POST['password'] != ""? $password : "";
        $confirmpassword = $_POST['confirm-password'] != ""? $confirmpassword : "";
        
        if($username != "" && $password != "" && $email != "" && $password == $confirmpassword)
        {
            $password = sha1($password);
            $propertyResult = InsertUser($username, $email, $password);
            if($propertyResult == 1)
              $_SESSION['message'] = "Registrazione avvenuta con successo!";
            else
              $_SESSION['message'] = "Nome utente o email gia esistente!";
        }
        else
            $_SESSION['message'] = "Errore! Controllare che i campi non siano vuoti e che le password siano uguali!";
        
        header("Location: ". $paginaRedirect);
    }

?>