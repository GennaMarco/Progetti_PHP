<?php 


$sesso = isset($_POST['sesso']) ? $_POST['sesso'] : "";
$categorie = isset($_POST['categorie']) ? $_POST['categorie'] : array();


if(isset($_POST['cerca']))
{
   foreach($categorie as $categoria) 
   {
      switch($sesso) 
      {
   
         case 'uomo': switch ($categoria) 
                      {
		                    case 'cappelli': include "caricamentoVestiti/cappelli_uomo.php";
				                             break;
			
			                case 'sciarpe':  include "caricamentoVestiti/sciarpe_uomo.php";
			                                 break;

							case 'tshirt':   echo "Qua ci sono le tshirt uomo";
								             break;

							case 'felpe':    echo "Qua ci sono le felpe uomo";
								             break;
							
							case 'jeans':    echo "Qua ci sono i jeans uomo";
								             break;

							case 'mutande':  echo "Qua ci sono le mutande uomo";
								             break;
						    
						    case 'calzini':  echo "Qua ci sono i calzini uomo";
								             break;
						    default: break;		             
		              }
		              break;

	     case 'donna': switch ($categoria) 
                       {
		                    case 'cappelli': echo "Qua ci sono i cappelli donna";
				                             break;
			
			                case 'sciarpe':  echo "Qua ci sono le sciarpe donna";
			                                 break;

							case 'tshirt':   echo "Qua ci sono le t-shirt donna";
								             break;

							case 'felpe':    echo "Qua ci sono le felpe donna";
								             break;
							
							case 'jeans':    echo "Qua ci sono i jeans donna";
								             break;

							case 'mutande':  echo "Qua ci sono le mutande donna";
								             break;
						    
						    case 'calzini':  echo "Qua ci sono i calzini donna";
								             break;
					        default: break;		             
		               }
		               break;
	     default: break;
      }
   }
}

?>