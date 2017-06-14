<?php

include 'config.php';

/*$user="";
$pass="";*/
$datisbagliati=false;





if(isset($_POST['utente']) && isset($_POST['password']))
{
	foreach ($arrayassociativo_elencoutenti as $user => $pass) {
			if($_POST['utente']==$user && $_POST['password']==$pass)
			{
					setcookie('utente',$user,time()+300);
					header("location: aggiungipunto.php");

			}
			else {
					$datisbagliati=true;
					}
	}
	
	if($datisbagliati==true)
	echo "<h1>Hai di nuovo sbagliato</h1><br><form action=login.php><button type='submit'>Riprovaci</button></form>";
}


else 
{
//METTO IN PAUSA IL PHP E RIAPRO IL TAG <?PHP DOPO FINE PAGINA HTML DOVE CHIUDERO' LA GRAFFA DEL ELSE
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Codice corretto: fai il login</title>
</head>
<body>

<h3>Inserisci i tuoi dati di login:</h3>
<?php if(MOSTRASUGGERIMENTI) echo "
<pre>
Utente		Password

Pippo		Pluto
Cane		Gatto
Pesci		Scimmia
Design		Cobetto
</pre>";
?>

<form method="POST" action="login.php"> <!--Così torna su questa pagina e controlla i dati di login -->

<label>Utente:</label>
<input type="text" name="utente" />
<label>Password:</label>
<input type="password" name="password" />
<button type="submit" value="Submit">Invia</button>
<button type="reset">Reimposta</button>
</form>




</body>
</html>

<?php

}

?> 