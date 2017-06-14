<?php 

class HelloWorld 
{
	// property declaration
    public $var = 'Hello, World!';
    
    // method declaration
    public function displayVar()
    {
    	echo $this->var;
    }
}

class CiaoMondo 
{
	// property declaration
    public $var = 'Ciao, mondo!';
    
    // method declaration
    public function displayVar()
    {
    	echo $this->var;
    }
}

$mioSaluto = new HelloWorld();
$tuoSaluto = new CiaoMondo();

print_r($mioSaluto);       // stampa la forma dell'oggetto
echo "<br>";
echo $mioSaluto->var."<br>";        // l'operatore -> serve per accedere ai metodi della classe dell'oggetto istanziato
echo $tuoSaluto->displayVar();      













 ?>