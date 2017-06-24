<?php 
      $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME);
      $idpost = mysqli_real_escape_string($mysqliConnection, $_GET['IdPost']);
      $propertyResult = SelectPostByIdPost($idpost); ?>
<?php $row = mysqli_fetch_array($propertyResult); ?>
<div class="container container-content">
	<div class="single-post">
            <div class="left" >
                <h2 class="post-title">
                    <?= $row['Title']?>
                </h2>
                <h3 class="post-subtitle">
                    <?= "Author: ".$row['Author']."<br>Genre: ".$row['Genere']?>
                </h3>
                <h4>
                    <?php 

                      $review = $row['Review'];
                      $rowsReview = str_split($review, 22);
                      foreach ($rowsReview as $rowReview) 
                        echo $rowReview."\n";
                      

                    ?>
                </h4>
            </div>
                <?php  echo '<img style="height: 400px;" class="img-post" src="data:image/jpg;base64,'.base64_encode($row['Immagine']).'">';?>
        <p class="post-meta">Posted by Marco on <?= $row['DatePost']?></p>
    </div>
</div>