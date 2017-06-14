<?php 

class Automobile
{
   private $marca = ""; 
   private $modello = ""; 
   private $cilindrata; 
   const NUM_RUOTE = 4; 
   private $colore = "";

   public function __construct($marca, $modello, $cilindrata, $colore)
   {
   	  echo "ho costruito un oggetto"."<br/>";
   	  $this->marca = $marca;
   	  $this->modello = $modello;
   	  $this->cilindrata = $cilindrata;
   	  $this->colore = $colore;
   }

   public function setMarca($marca)
   {
   	 $this->marca = $marca;
   }

   public function setModello($modello)
   {
   	 $this->modello = $modello;
   }

   public function setCilindrata($cilindrata)
   {
   	 $this->cilindrata = $cilindrata;
   }

   public function setColore($colore)
   {
   	 $this->colore = $colore;
   }

   public function StampaOggetto()
   {
   	  return "marca: ".$this->marca."<br/>".
   	         "modello: ".$this->modello."<br/>".
   	         "cilindrata: ".$this->cilindrata."<br/>".
   	         "colore: ".$this->colore."<br/>".
   	         "numRuote: ".Automobile::NUM_RUOTE."<br/>";   // ::  identificano l'accesso ad una proprietà statica, le costanti sono proprietà STATICHE
   } 
}



  $marca="BMW";
  $modello="X5";
  $cilindrata=3000;
  $colore="Nera";

  

  /*$miaAuto = new Automobile($marca, $modello, $cilindrata, $colore);

  $miaAuto->setMarca("BMW");
  $miaAuto->setModello("X5");
  $miaAuto->setCilindrata(3000);
  $miaAuto->setColore("rosso");

  echo mb_strtoupper($miaAuto->StampaOggetto());          // mb_strtoupper() è una funzione che converte una stringa in maiuscolo

  $miaAuto2 = new Automobile("Ferrari", "GT0SA", 6000, "Leopardata");

  echo mb_strtoupper($miaAuto2->StampaOggetto());

  $arrayOggeti = array($miaAuto, $miaAuto2);
  echo count($arrayOggeti);

  echo "<pre>";
  print_r($arrayOggeti);
  echo "</pre>";

  for ($i=0; $i <count($arrayOggeti) ; $i++) 
  { 
     echo $arrayOggeti[$i]->StampaOggetto();    // stampo tutti gli oggetti dell'array
  }*/





?>