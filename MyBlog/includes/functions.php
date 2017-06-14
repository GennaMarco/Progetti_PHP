<?php 
	
	function SelectGenres()
	{
		$mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 
    
        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "SELECT Genere FROM generi";

        return mysqli_query($mysqliConnection, $sql);
	}

  function SelectPosts()
  {
    $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 
    
        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "SELECT * FROM posts, generi, immagini 
        WHERE generi.IdGenere = posts.IdGenere 
        AND immagini.IdImmagine = posts.IdImmagine";

        return mysqli_query($mysqliConnection, $sql);
  }



 ?>