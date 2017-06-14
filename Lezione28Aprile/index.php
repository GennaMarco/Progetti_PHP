<?php

include './includes/header.php';

?>

<div class="container">

<div class="blog-header">
        <h1 class="blog-title"><?=TITOLO?></h1>
        <p class="lead blog-description"><?=SOTTOTITOLO?></p>
      </div>

      <div class="row">
    
<?php

//switch viste

$vista = (isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home');

switch ($vista) 
{
	case "single":
              include './includes/single_post.php';
	    	  break;

	case "inserisci":
              include './includes/form.php';
	    	  break;

	case "elimina":
              include './includes/deletePost.php';
	    	  break;    	    
	// insert
	// delete
	// update
	case 'nopost':
			  echo "non ci sono post";	    		  
	default:
        	  include './includes/content.php';
			  break;
}

//sidebar lato dx menu categorie
include './includes/sidebar.php';

?>

</div>
</div>

<?php


include './includes/footer.php';





