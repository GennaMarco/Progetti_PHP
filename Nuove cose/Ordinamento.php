<!DOCTYPE html>
<html>
<head>
	<title> Ordinatore</title>
</head>
<body>

<h2>Ordinatore</h2>

<form method="post">
	
	<label for = "numero1">Numero 1</label>
	<input type = "number" name = "num1" placeholder="Inserisci valore qui" />

	<br><br>
	<label for = "numero2">Numero 2</label>
	<input type = "number" name = "num2" placeholder="Inserisci valore qui" />

	<br><br>
	<label for = "numero3">Numero 3</label>
	<input type = "number" name = "num3" placeholder="Inserisci valore qui" />
    
    <br><br>
	<input type="submit" value="calcola">


</form>





<?php 
error_reporting(0);

       $val1 = $_POST['num1'];
       $val2 = $_POST['num2'];
       $val3 = $_POST['num3'];

       $array = array($val1, $val2, $val3);
       
       for($i = 0; $i< 3; $i++)
       {
       	  for($j = 0; $j < 3; $j++)
       	  {
       	  	if($array[$j] > $array[$i])
       	  	{
       	  		$temp = $array[$i];
       	  		$array[$i] = $array[$j];
       	  		$array[$j] = $temp;
            }
       	  }
       }

       if(is_numeric($val1) || is_numeric($val2) || is_numeric($val3))
       {
          echo "Ordine crescente: ";
          for($i = 0; $i < 3; $i++)
          {
       	     if($i==2)
               echo $array[$i];
             else
             {
             	if($array[$i]!=0)
         	      echo $array[$i]." ";
         	 }
          }
       }
       else
       	echo "<br>"."Inserisci almeno un numero";

         
       





 ?>

</body>
</html>