<?php 

$arrayassociativo_elencoutenti=array("Pippo"=>"Pluto","Cane"=>"Gatto","Pesci"=>"Scimmia","Design"=>"Cobetto");

define("DEBUG",false); //modifica con true per avere stampato l'array e phpinfo();
define("RESETSESSION",false); //se true pulisce la sessione da tutti i punti
define("MOSTRASUGGERIMENTI",true); //buona fortuna se lo metti a false

if(DEBUG) {print_r($arrayassociativo_elencoutenti); phpinfo();}

 ?>