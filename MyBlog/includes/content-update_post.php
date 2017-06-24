<?php 
      $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME);
      $idpost = mysqli_real_escape_string($mysqliConnection, $_GET['IdPost']);
      $propertyResultSinglePost = SelectPostByIdPost($idpost);
      $post = mysqli_fetch_array($propertyResultSinglePost);
    ?>

<div class="form-content immagine" style="background-image: url('img/form_sfondo.jpeg')">
  <form id="form_update_post" class="center-block" method="POST" enctype="multipart/form-data">
        <h2 class="text-center color-black">Update Post</h2>
        <div class="form-group">
          <label class="color-black" for="inputTitle">Title</label>
          <input class="form-control" type="text" name="title" id="inputTitle" value="<?= $post['Title'] ?>">
        </div>
        <div class="form-group">
          <label class="color-black" for="inputAuthor">Author</label>
          <input class="form-control" type="text" name="author" id="inputAuthor" value="<?= $post['Author'] ?>">
        </div>
        <div class="form-group">
          <label class="color-black" for="inputReview">Review</label>
          <textarea class="form-control" rows="10" name="review" id="inputReview"><?= $post['Review'] ?></textarea>  
        </div>
        <div class="form-group">
          <label class="color-black">Genre</label>
          <select class="form-control" name="genre">

                  <?php $propertyResult = SelectGenres();?>      
                  <?php while ($row = mysqli_fetch_array($propertyResult)) : ?>
                  <?php   if($post['Genere'] == $row['Genere'])
                            $selected = "selected";
                          else 
                            $selected = ""; 
                          ?>                
                        <option value="<?=$row['IdGenere']?>" <?= $selected ?>><?=$row['Genere']?></option>
                  <?php endwhile; ?>
         
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-warning" name="btnModifica">Update</button>
        </div>
  </form>
</div>

<?php 
    
    if(isset($_POST['btnModifica']))
    {
        $title = mysqli_real_escape_string($mysqliConnection, $_POST['title']);
        $author = mysqli_real_escape_string($mysqliConnection, $_POST['author']);
        $review = mysqli_real_escape_string($mysqliConnection, $_POST['review']);
        $idgenre = $_POST['genre'];

        if(!empty($title) && !empty($author) && !empty($review))
        {
          $propertyResultPosts = UpdatePostByIdPost($idpost, $title, $author, $review, $idgenre);
          ?>
          <script type="text/javascript">
          
          PostMessage("Post aggiornato con successo!");
          
          </script>
          <?php
        }
    }

?>
