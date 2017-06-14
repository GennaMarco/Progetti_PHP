<?php 

  function AreaTriangolo($b, $a)
  {
     return $b*$a/2;
  }

  function PerimetroTriangolo($l1, $l2, $l3)
  {
     return $l1 + $l2 + $l3;
  }

  function AreaCerchio($r)
  {
  	return pi() * $r * $r;
  }

  function PerimetroCerchio($r)
  {
     return 2 * pi() * $r;
  }
  
  function AreaRettangolo($b, $a)
  {
     return $b * $a;
  }

  function PerimetroRettangolo($b, $a)
  {
     return ($b+$a)*2;
  }

  function redirect($pagina)
  {
    header("Location: " . $pagina);
    exit;
  }


 ?>