<!DOCTYPE html>
<html>
<head>
	<title> Calcolatrice </title>
</head>
<body>

<h2>Calcolatrice</h1>

      <form method="post" action="">
         <fieldset>
         <legend>Calcolatrice</legend>

           <label for = "PrimoNumero">Primo numero</label>
           <input type = "text" name = "PrimoNumero" placeholder="Inserisci valore qui" />

           <label for = "SecondoNumero">Secondo numero</label>
           <input type = "text" name = "SecondoNumero" placeholder="Inserisci valore qui" />
           <br> <br>
           <label for = "Operazione">Operazioni</label><br>

           <input type = "radio" name = "Operazione" value="addizione" checked="checked">Addizione<br>
           <input type = "radio" name = "Operazione" value="moltiplicazione">Moltiplicazione<br>
           <input type = "radio" name = "Operazione" value="divisione">Divisione<br>
           <input type = "radio" name = "Operazione" value="sottrazione">Sottrazione<br>


 

         </fieldset>
         <br>
         <input type="submit" value="calcola">

      </form>

      <?php

            error_reporting(0);

            $val1 = ($_POST['PrimoNumero'])? $_POST['PrimoNumero']:0;
            $val2 = ($_POST['SecondoNumero'])? $_POST['SecondoNumero']:0;
            $operazione = $_POST['Operazione'];

            include_once 'Inc/config.php';

            $calcolo = calcolaValori($val1, $val2, $operazione);

            if(is_numeric($calcolo))
            	echo "<h2> RISULTATO: ".$calcolo."</h2>";

       ?>
           

</body>
</html>