<?php 

if(!$_SESSISON['admin']) die("Ehi tu! non puoi eliminare!")
	$id = mysqli_real_escape_string($DB->link, $_REQUEST['id_post']);

	$query = "DELETE FROM posts WHERE id = $id";


	$DB->delete($query);


?>