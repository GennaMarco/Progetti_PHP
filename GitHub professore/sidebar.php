<h1> Menu </h1>

<?php 

    if(isset($_GET['pagina']))         // isset è una funzione che ritorna un valore bool (true o false)
       $miaPagina = $_GET['pagina'];
    else
      $miaPagina = "home";
      

   switch ($miaPagina) 
   {
   	case 'studenti':
   	    
          echo "<ul>";
          foreach ($studenti as $studente) 
          {
             echo "<li>"
             ."<a href='?pagina=studenti&argomento={$studente['cognome']}'>"
             .$studente['nome']
             ." "
             .$studente['cognome']
             ."</a>"
             ."</li>";
          }
          "</ul>";
   		
    break;

   	case 'due':
   	    
			echo "<ul>";
			foreach ($pagine as $key => $value) 
      {
				echo "<li><a href=\"$value\">$key</a></li>"; // href=?pagina=due&argomento=variabili
			}
			echo "</ul>";
   		
   	break;
   	
   	default:
    echo 'nessun valore di default per la variabile $miaPagina';
    echo "<br>";
    echo "nessun valore di default per la variabile $miaPagina";
   		
   		break;
   }





 ?>

