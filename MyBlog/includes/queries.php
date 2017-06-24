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
        AND immagini.IdImmagine = posts.IdImmagine
        ORDER BY posts.DatePost DESC";

        return mysqli_query($mysqliConnection, $sql);
  }

  function SelectPostsLimitOffset($limit, $offset)
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
        ORDER BY posts.DatePost DESC LIMIT $limit OFFSET $offset";

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

  function SelectPostsByIdGenreLimitOffset($IdGenre, $limit, $offset)
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
        AND generi.IdGenere = $IdGenre LIMIT $limit OFFSET $offset";

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

  function UpdatePostByIdPost($idpost, $title, $author, $review, $idgenre)
  {
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 

        if(mysqli_connect_errno())
        {
          printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
          exit();
        }

        $sql = "UPDATE posts 
                SET posts.Title = '$title', posts.Author = '$author', 
                posts.Review = '$review', posts.IdGenere = $idgenre
                WHERE posts.IdPost = $idpost";

        return mysqli_query($mysqliConnection, $sql);
  }

  function DeletePostAndImageByIdPost($IdPost)
  {
      $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME); 
  
      if(mysqli_connect_errno())
      {
        printf("Oops, problemi con connessione al database: %s", mysqli_connect_errno());
        exit();
      }

      $sql = "DELETE FROM immagini, posts USING immagini, posts
              WHERE posts.IdImmagine = immagini.IdImmagine AND posts.IdPost = $IdPost";
              

      return mysqli_query($mysqliConnection, $sql);
  }
?>