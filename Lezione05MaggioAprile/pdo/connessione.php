<?php 

include_once './includes/config.php';


try{
   
   $connessione = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, "");

}catch(PDOException $eccezione)
{
	echo $eccezione->getMessage();
}

echo "ciao ";



 ?>