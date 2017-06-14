<!DOCTYPE html>
<html>
<head>
	<title>calendario</title>
	<style type="text/css">
		
.box{width: 50px; height: 50px; float: left; border: 1px solid black;}
.clear{clear: left;}
.red{background-color: red;}

	</style>
</head>
<body>
<?php 

$oreLezione = 4;
$totaleOre = 110;
$lezioniOggi = 10;
$numLezioni = $totaleOre / $oreLezione;

    
    for ($i=0, $e=1; $i <$numLezioni ; $i++, $e++) 
    {
        $classe = ($e <= $lezioniOggi)? "red" : "";

    	echo "<div class='box {$classe}'>$e</div>";

    	if($e%6==0) 
    	  echo "<div class='clear'></div>";
    }




 ?>

</body>
</html>