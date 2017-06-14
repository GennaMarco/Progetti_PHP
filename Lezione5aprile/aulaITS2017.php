<?php 

include 'contenitoreStudenti.php';
include 'header.php';

?>
<div class="container">
	
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Cognome</th>
			<th>Email</th>
       </tr>
    </thead>

    <tbody>
     <?php foreach ($elencoStudenti as $studente) : ?>
       <tr>
			<td><?= $studente->nome ?></td>
			<td><?= $studente->cognome ?></td>
			<td><?= $studente->email ?></td>
       </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>
<?php include 'footer.php'; ?>