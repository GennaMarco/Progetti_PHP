<?php
    error_reporting(0);

    include "FunzioniFigure.php";
    echo "Cliccare tra le seguenti figure geometriche". "<br>"; 

    echo "<a href=?pagina=triangolo>triangolo</a>";
    echo "<br>";

    echo "<a href=?pagina=cerchio>cerchio</a>";
    echo "<br>";

    echo "<a href=?pagina=rettangolo>rettangolo</a>";
    echo "<br>";
?>
<html>
<head>
	<title>Form figure geometriche</title>
</head>
<body>

  <form method="post" action="">
  <br>
  <?php 

  if(isset($_GET['pagina'])) 
  {
     $messaggio = "<br>"."Figura selezionata: ".$_GET['pagina']."<br>"."<br>";
     echo $messaggio;
  }

  switch($_GET['pagina']) 
  {
     case 'triangolo':?>
                      base: <input type="number" name="basetria" value=""><br>
                      altezza: <input type="number" name="altezzatria" value=""><br>
                      lato2: <input type="number" name="lato2" value=""><br>
                      lato3: <input type="number" name="lato3" value="">

<?php                 $base = $_POST['basetria'];
                      $altezza = $_POST['altezzatria'];
                      $lato2 = $_POST['lato2'];
                      $lato3 = $_POST['lato3'];
                      if(isset($base) && isset($altezza) && isset($lato2) && isset($lato3))
                      {
                     	 $area = AreaTriangolo($base, $altezza);
          	             $perimetro = PerimetroTriangolo($base, $lato2, $lato3);
                      }
                      break;  
		

	case 'cerchio':?> 
	                  raggio: <input type="number" name="raggio" value="">

<?php                 $raggio = $_POST['raggio'];
	                  if(isset($raggio))
	                  {
	      	             $area = AreaCerchio($raggio);
	      	             $perimetro = PerimetroCerchio($raggio);
	      	          }
                      break;

	case 'rettangolo':?>
	                  base: <input type="number" name="baseret" value=""><br>
	                  altezza: <input type="number" name="altezzaret" value="">

<?php                 $base = $_POST['baseret'];
                      $altezza = $_POST['altezzaret'];
	                  if(isset($base) && isset($altezza))
	                  {
	       	             $area = AreaRettangolo($base, $altezza);
	                     $perimetro = PerimetroRettangolo($base, $altezza); 
	                  }            
                      break;		
}

if(isset($_GET['pagina']))
{ 
    echo "<br>"."<input type='submit' value='calcola Area e Perimetro'>"."<br>";
    if(isset($area) && isset($perimetro))
    {
       echo "<br>"."Area: ".  $area. "<br>";
       echo "Perimetro: ".  $perimetro;
       if($area == 0 || $perimetro == 0)
       	  redirect("FormFigura.php?pagina={$_GET['pagina']}");
    }
}
?>
</form>

</body>
</html>

