<?php 

class Studente
{
   public $nome;
   public $cognome;
   public $dataNascita;
   public $email;   
   public $skill;   
   public $noskill;   
   public $foto;   
   public $matricola;

  

   public function __construct($nome, $cognome, $email)
   {
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->email = $email;
      $this->skill = array('PHP', 'Java', 'C#');
   }

   public function __toString()
   {
      return $this->nome." ".$this->cognome." ".$this->email;
   }   
}








 ?>