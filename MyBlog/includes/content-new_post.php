<div class="form-content immagine" style="background-image: url('img/form_sfondo.jpeg')">

  <form class="center-block">
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
          <select class="form-control" name="genere">

                    <?php $propertyResult = SelectGenres();?>      
                    <?php while ($row = mysqli_fetch_array($propertyResult)) : ?>                
                        <option><?=$row['Genere']?></option>
                    <?php endwhile; ?>
         
          </select>
        </div>
        <div class="form-group">
          <label class="color-black" for="inputFile">Select Image</label>
          <input type="file" name="file-img" id="inputFile"> 
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="btnInserisci">Insert</button>
        </div>
  </form>
</div>