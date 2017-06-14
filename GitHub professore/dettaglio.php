<?php 

echo "<h2>Dati anagrafici dello studente </h2>";

foreach($studenti as $studente)
{
    if($_GET['argomento'] == $studente['cognome'])
    {
        echo "Nome: ".$studente['nome']."<br>";
        echo "Cognome: ".$studente['cognome']."<br>";
        echo "Email: ".$studente['email']."<br>";
    }
}

 ?>