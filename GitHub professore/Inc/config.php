<?php 
// switch per la modalità debug
error_reporting(0);
//error_reporting(E_ALL);


// etichetta titolo
$title = "Corso Backend ITS 2017 Php Programming"; 





// array di array associativi info studenti
$studenti = [
							
		["nome"=>"RICCARDO", "cognome"=>"GABOSSI",	  "email" => "riccardo.gabossi@edu.itspiemonte.it"		    ],
		["nome"=>"VLADIMIR", "cognome"=>"VIBIO",	  "email" => "vladimir.vibio@edu.itspiemonte.it"		    ],
		["nome"=>"GIORGIO", "cognome"=>"MASERAZZO",	  "email" => "giorgio.maserazzo@edu.itspiemonte.it"         ],
		["nome"=>"STEFANO", "cognome"=>"SCICOLONE",	  "email" => "stefano.scicolone@edu.itspiemonte.it"		    ],
		["nome"=>"DAVIDE", "cognome"=>"COLANGELO",	  "email" => "davide.colangelo@edu.itspiemonte.it"		    ],
		["nome"=>"FABRIZIO", "cognome"=>"DE CICCO",	  "email" => "fabrizio.decicco@edu.itspiemonte.it"		    ],
		["nome"=>"SIMONE", "cognome"=>"RORATO",	      "email" => "simone.rorato@edu.itspiemonte.it"		        ],
		["nome"=>"LORENZO", "cognome"=>"SCARPA",	  "email" => "lorenzo.scarpa@edu.itspiemonte.it"		    ],
		["nome"=>"SIMONE", "cognome"=>"FUOCO",	      "email" => "simone.fuoco@edu.itspiemonte.it"		        ],
		["nome"=>"ALESSANDRO", "cognome"=>"VIOTTI",	  "email" => "alessandro.viotti@edu.itspiemonte.it"		    ],
		["nome"=>"ROSA", "cognome"=>"BUONO",	      "email" => "rosa.buono@edu.itspiemonte.it"		        ],
		["nome"=>"STEFANO", "cognome"=>"ADAMO",	      "email" => "stefano.adamo@edu.itspiemonte.it"		        ],
		["nome"=>"TONY", "cognome"=>"FAVA",	          "email" => "tony.fava@edu.itspiemonte.it"		            ],
		["nome"=>"FRANCESCO", "cognome"=>"TALOMO",	  "email" => "francesco.talomo@edu.itspiemonte.it"		    ],
		["nome"=>"LUIGI", "cognome"=>"BOTTASSO",	  "email" => "luigi.bottasso@edu.itspiemonte.it"		    ],
		["nome"=>"MARCO", "cognome"=>"DE GENNARO",	  "email" => "marco.degennaro@edu.itspiemonte.it"		    ],
		["nome"=>"EMANUELE", "cognome"=>"GALLINA",	  "email" => "alessandro.gallina@edu.itspiemonte.it"		], 
		["nome"=>"MARCO", "cognome"=>"ANTONINO",	  "email" => "marco.antonino@edu.itspiemonte.it"		    ], 
		["nome"=>"ANDREA", "cognome"=>"SCAVUZZO",	  "email" => "andrea.scavuzzo@edu.itspiemonte.it"		    ], 
		["nome"=>"THOMAS", "cognome"=>"OWENS",	      "email" => "thomas.owens@edu.itspiemonte.it"		        ], 
		["nome"=>"ALESSANDRO", "cognome"=>"FLERES",	  "email" => "alessandro.fleres@edu.itspiemonte.it"		    ], 
		["nome"=>"DANILO", "cognome"=>"CAPPELLINO",	  "email" => "danilo.cappellino@edu.itspiemonte.it"		    ], 
		["nome"=>"VINCENZO", "cognome"=>"DI DOMENICO","email" => "vincenzo.didomenico@edu.itspiemonte.it"       ],
		["nome"=>"EDOARDO", "cognome"=>"ELIA",	      "email" => "edoardo.elia@edu.itspiemonte.it"		        ], 
		["nome"=>"SIMONE", "cognome"=>"VOLPE",	      "email" => "simone.volpe@edu.itspiemonte.it"		        ], 
		["nome"=>"MATTIA", "cognome"=>"VICENZI",	  "email" => "mattia.vicenzi@edu.itspiemonte.it"		    ],
		["nome"=>"MARCO", "cognome"=>"PANZANARO",	  "email" => "marco.panzanaro@edu.itspiemonte.it"		    ], 
				];

// etichette menu principale
$menu_orizzontale = [
		''	=> 'Home Page',
		'uno' =>'PhpInfo',
		'due' =>'Corso Php',
		'studenti' =>'Studenti',
		'giochi' =>'Giochi',
		'calcoli' => 'Calcolatrice',
		'http://www.php.net' => 'Php.net',
		'http://github.com/maboglia/ITS2017' => 'github',
	];

// pagine del corso php
$pagine = array(
				'variabili' => '?pagina=due&argomento=variabili',
				'cicli' => '?pagina=due&argomento=cicli',
				'array' => '?pagina=due&argomento=array',
				'array_associativi' => '?pagina=due&argomento=array_associativi',
				'condizioni' => '?pagina=due&argomento=condizioni',
			 );



function creaHeader($parola='')     // simile all'overload di java; Nel caso gli passo un parametro, $parola assume il valore passato; Nel caso non gli passo nulla, $parola assume il valore ''.        (default value)
{
	switch($parola)
	{
		case "ciao":

	      for ($i = 1 ; $i < 7 ; $i++)
	      {
		     echo "<h".$i.">$parola</h".$i.">";           
	      }
	      break;

	    case '':
	       echo "<h1>non hai scritto nulla</h1>";
	       break;

	    default:
	      echo "<h1>hai scritto $parola</h1>";
	      break;
	}
}

function calcolaValori($a, $b, $operazione = 'addizione')
{
	$c = 0;

	switch ($operazione) 
	{
		case 'addizione':
			$c = $a + $b;
			break;

	    case 'sottrazione':
			$c = $a - $b;
			break;

	    case 'moltiplicazione':
			$c = $a * $b;
			break;

	    case 'divisione':
			$c = $a / $b;
			break;

		
		default:
			$c = "non hai inserito valori corretti";
			break;
	}
	
	return $c;
}

?>





 