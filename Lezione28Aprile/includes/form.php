
<?php


if(isset($_POST['btninserisci']))
{
  $titolo = mysqli_real_escape_string($DB->link, $_POST['titolo']);
  $sottotitolo = mysqli_real_escape_string($DB->link, $_POST['sottotitolo']);
  $testo = mysqli_real_escape_string($DB->link, $_POST['testo']);
  $id_cat = mysqli_real_escape_string($DB->link, $_POST['categoria']);

  if(!empty($titolo) && !empty($testo) && !empty($id_cat))
  {
    $query = "INSERT INTO posts ( titolo, sottotitolo, testo, id_categoria )"
             ."VALUES ('$titolo', '$sottotitolo', '$testo', '$id_cat')";

    $DB->insert($query);
  }
} 

$query = "SELECT * FROM categorie";

$elencocategorie = $DB->select($query);


?>


<form method="POST" action="<?=$_SERVER['PHP_SELF']?>?view=inserisci">
  <div class="form-group">
    <label for="titolo">titolo</label>
    <input type="text" class="form-control" id="titolo" name="titolo" placeholder="titolo">
  </div>
  <div class="form-group">
    <label for="sottotitolo">sottotitolo</label>
    <input type="password" class="form-control" id="sottotitolo" name="sottotitolo" placeholder="sottotitolo">
  </div>
  <div class="form-group">
    <label for="testo">testo</label>
    <textarea class="form-control" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="immagine">immagine</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">

    <select class="form-control" name="categoria">
        <option value="0">Seleziona una categoria</option>

<?php while ($row = mysqli_fetch_array($elencocategorie)) : ?>
        <option value="<?=$row['id_categoria'] ?>"><?=$row['categoria']?></option>
<?php endwhile;?>

    </select>

    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="btninserisci">Inserisci</button>
</form>

