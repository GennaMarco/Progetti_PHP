<?php 

include 'config.php';

function stampalista(){
	if(isset($_SESSION))
		
		foreach ($_SESSION as $user => $punti) {
			echo $user." ".$punti."<br/>";
		}

}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pagina di riepilogo punteggi</title>
 	<META HTTP-EQUIV=”Refresh” CONTENT=”5; url=http://www.html.it”>
 </head>
 <body>
 
<?php
	echo "Lista Utenti/Punti<br/>";
	stampalista();
	if(RESETSESSION) $_SESSION=array();
?>

 </body>
 </html>