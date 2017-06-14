<?php 
	$cookie_name = "user";
	$cookie_value = isset($_POST["user"]) ?  $_POST["user"] : "";
	$cookie_time = time() + (60 * 60 * 24 * 30); // 1 mese sono 86400 secondi sono un giorno
	//setcookie($cookie_name, $cookie_value, $cookie_time);  
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>


 	<?php 

 		if(isset($_COOKIE[$cookie_name]))
 		{
 			echo "Bentornato ".$_COOKIE[$cookie_name];
 		}
 		else
 		{
 			echo "cookie non settato";
 			setcookie($cookie_name, $cookie_value, $cookie_time);
 		}

  	?>
 
 </body>
 </html>

