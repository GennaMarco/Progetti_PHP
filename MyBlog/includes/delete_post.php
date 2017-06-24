<?php 
	include 'database.php';
  include 'queries.php';
	
  $propertyResult = DeletePostAndImageByIdPost($_POST['IdPost']);
?>
<script type="text/javascript">
  PostMessage("Post eliminato con successo!");
</script>