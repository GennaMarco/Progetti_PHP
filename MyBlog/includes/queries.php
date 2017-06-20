<?php 
	
	function SelectGenres()
	{
		    $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 
    
        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "SELECT * FROM generi";

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

  function SelectPostsByIdGenre($IdGenre)
  {
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 
    
        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "SELECT * FROM posts, generi, immagini 
        WHERE generi.IdGenere = posts.IdGenere 
        AND immagini.IdImmagine = posts.IdImmagine
        AND generi.IdGenere = $IdGenre";

        return mysqli_query($mysqliConnection, $sql);
  }

  function SelectPostByIdPost($IdPost)
  {
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 

        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "SELECT * FROM posts, generi, immagini 
        WHERE generi.IdGenere = posts.IdGenere 
        AND immagini.IdImmagine = posts.IdImmagine
        AND posts.IdPost = $IdPost";

        return mysqli_query($mysqliConnection, $sql);
  }

  function SelectIdImageByImage($image)
  {
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 

        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "SELECT immagini.IdImmagine FROM immagini WHERE Immagine = '$image'";

        return mysqli_query($mysqliConnection, $sql);
  }

  function InsertPost($title, $author, $review, $date, $idgenre, $idimage)
  {
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 

        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "INSERT INTO posts (IdPost, Title, Author, Review, DatePost, IdGenere, IdImmagine) 
                VALUES (NULL, '$title', '$author', '$review', '$date', '$idgenre', '$idimage')";

        return mysqli_query($mysqliConnection, $sql);
  }

  function InsertImage($image)
  {
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 

        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "INSERT INTO immagini (IdImmagine, Immagine) 
                VALUES (NULL, '$image')";

        return mysqli_query($mysqliConnection, $sql);
  }

  
  

?>