<div class="form-content immagine" style="background-image: url('img/form_sfondo.jpeg')">

  <form id="form_new_post" class="center-block" method="POST" enctype="multipart/form-data">
        <h2 class="text-center color-black">New Post</h2>
        <div class="form-group">
          <label class="color-black" for="inputTitle">Title</label>
          <input class="form-control" type="text" name="title" id="inputTitle">
        </div>
        <div class="form-group">
          <label class="color-black" for="inputAuthor">Author</label>
          <input class="form-control" type="text" name="author" id="inputAuthor">
        </div>
        <div class="form-group">
          <label class="color-black" for="inputReview">Review</label>
          <textarea class="form-control" rows="10" name="review" id="inputReview"></textarea>  
        </div>
        <div class="form-group">
          <label class="color-black">Genre</label>
          <select class="form-control" name="genre">

                    <?php $propertyResult = SelectGenres();?>      
                    <?php while ($row = mysqli_fetch_array($propertyResult)) : ?>                
                        <option value="<?=$row['IdGenere']?>"><?=$row['Genere']?></option>
                  <?php endwhile; ?>
         
          </select>
        </div>
        <div class="form-group">
          <label class="color-black" for="inputFile">Image</label>
          <input type="file" name="file-img" id="inputFile"> 
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="btnInserisci">Insert</button>
        </div>
  </form>

  <?php
     
    if(isset($_POST['btnInserisci']))
    {
        $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME);

        $title = mysqli_real_escape_string($mysqliConnection, $_POST['title']);
        $author = mysqli_real_escape_string($mysqliConnection, $_POST['author']);
        $review = mysqli_real_escape_string($mysqliConnection, $_POST['review']);
        $idgenre = $_POST['genre'];
        $image = addslashes(file_get_contents($_FILES['file-img']['tmp_name']));

        if(!empty($title) && !empty($author) && !empty($review) && !empty($image))
        {
          $propertyResultImage = InsertImage($image);
          $propertyResultIdImage = SelectIdImageByImage($image);
          $img = mysqli_fetch_array($propertyResultIdImage);
          $propertyResultPosts = InsertPost($title, $author, $review, date('Y-m-d H:i:s'), $idgenre, $img['IdImmagine']);

          ?>
          <script type="text/javascript">
          PostMessage("Post inserito con successo!");
          </script>
          <?php
        }
    }
?>
</div>
