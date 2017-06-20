<!-- Main Content -->
    <div class="container container-content-sidebar">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <?php if(isset($_GET['IdGenere']))
                        $propertyResult = SelectPostsByIdGenre($_GET['IdGenere']);
                      else
                        $propertyResult = SelectPosts();
                ?>      
                <?php while ($row = mysqli_fetch_array($propertyResult)) : ?>                
                        <div class="post-preview">
                                <a class="left" href="single_post.php?IdPost=<?= $row['IdPost'] ?>">
                                    <h2 class="post-title">
                                        <?= $row['Title']?>
                                    </h2>
                                    <h3 class="post-subtitle">
                                        <?= "Author: ".$row['Author']."<br>Genre: ".$row['Genere']?>
                                    </h3>
                                    <h4>
                                        <?php 

                                          $review = substr($row['Review'], 0, 150)."...";
                                          $rowsReview = str_split($review, 22);
                                          foreach ($rowsReview as $rowReview) 
                                            echo $rowReview."\n";
                                          

                                        ?>
                                    </h4>
                                </a>
                                <a href="single_post.php?IdPost=<?= $row['IdPost'] ?>">
                                    <?php  echo '<img class="img-post" src="data:image/jpg;base64,'.base64_encode($row['Immagine']).'">';?>
                                </a>
                            <p class="post-meta">Posted by Marco on <?= $row['DatePost']?></p>
                            <br>
                            <a href="single_post.php?IdPost=<?= $row['IdPost'] ?>" class="btn btn-primary">Leggi tutto</a>
                            <a href="?view=modifica&id_post=<?= $row['IdPost'] ?>" class="btn btn-warning">Modifica</a>
                            <a class="btn btn-danger alert" onclick="eliminaAjax(<?= $row['IdPost'] ?>)">Elimina</a>
                        </div>
                        <hr>
                <?php endwhile; ?>
           </div>
        </div>
        <aside>
            <?php include 'includes/sidebar.php'; ?>
        </aside>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <script type="text/javascript">

         function eliminaAjax(argomento)
         {
            var numero_post = argomento;
            $.ajax
            (
                    {
                        method: "POST",
                        url: "includes/eliminaPost.php",
                        data: { IdPost: numero_post }
                    }
            )
            .done
            (
                function(msg)
                {
                    location.reload();
                    alert( "Post cancellato" + msg );
                }
            );
         }   
    </script>