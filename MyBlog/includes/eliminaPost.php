<?php 
	include 'database.php';
	function DeletePostByIdPost($IdPost)
  	{
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 
    
        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "DELETE FROM posts WHERE IdPost = $IdPost";
                

        return mysqli_query($mysqliConnection, $sql);
  	}

	$propertyResult = DeletePostByIdPost($_POST['IdPost']);

	 ?>