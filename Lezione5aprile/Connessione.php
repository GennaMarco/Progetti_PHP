<?php 

        

$mysqliConnection = new mysqli("localhost", "root", "", "its2017");

if(mysqli_connect_errno())  // numero di errori
{
   printf("Oops, abbiamo problemi con la connessione al db: %s", mysqli_connect_error());   // messaggio errore
   exit();
}



 ?>