<?php  

function redirect($pagina)
{
   header("Location: ". $pagina); // permette di reindirizzare la pagina scritta dopo "Location:"
   exit; 
}

function esiste($value)
{
   return isset($value) && $value !== "";
}




?>
