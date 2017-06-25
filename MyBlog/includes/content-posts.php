    <!-- Main Content -->
    <div class="container container-content-sidebar">
        <div class="row">
<?php    
            $mysqliConnection = new mysqli(DB_HOST,DB_USERS,DB_PASS,DB_NAME);
            $num_post_per_pagina = 3;
            if(isset($_GET['start']) && $_GET['start'] > 0)
                $start = mysqli_real_escape_string($mysqliConnection, $_GET['start']);
            else
                $start = 0;
            if(isset($_GET['IdGenere']))
            { 
                $idgenere = mysqli_real_escape_string($mysqliConnection, $_GET['IdGenere']);
                $genere = mysqli_real_escape_string($mysqliConnection, $_GET['Genere']);
                $postInpaginati = SelectPostsByIdGenreLimitOffset($idgenere, $num_post_per_pagina, $start);
                $postTotali = SelectPostsByIdGenre($idgenere);
                echo "<h1 class='page-header text-center' style='color: red;'>Filter by ".$genere."</h1>";
            }
            else
            { 
                $postInpaginati = SelectPostsLimitOffset($num_post_per_pagina, $start);
                $postTotali = SelectPosts();
                echo "<h1 class='page-header text-center' style='color: red;'>LATEST POST</h1>";
            } 
            $numero_posts_totali = $postTotali->num_rows;
            $numero_post_inpaginati = $postInpaginati->num_rows;
            
?>          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php while ($row = mysqli_fetch_array($postInpaginati)) : ?>
                        <div class="post-preview clearfix">
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

?>                              </h4>
                            </a>
                            <a href="single_post.php?IdPost=<?= $row['IdPost'] ?>">
<?php                           
                                echo '<img class="img-post" src="data:image/jpg;base64,'.
                                base64_encode($row['Immagine']).'">';

?>                          </a>
                            <p class="post-meta">Posted by Marco on <?= $row['DatePost']?></p>
                            <br>
                        <?php if(isset($_SESSION['user']) && $_SESSION['user'] == "admin") : ?>
                                <a class="btn btn-warning" href="./update_post.php?IdPost=<?= $row['IdPost'] ?>" >Update</a>
                                <a class="btn btn-danger alert" onclick="eliminaAjax(<?= $row['IdPost'] ?>)">Delete</a>
                            <?php endif; ?>
                        </div>
                        <hr>
<?php   
                        endwhile;
                        $numero_pagine = $numero_posts_totali / $num_post_per_pagina; 

?>
                        <nav aria-label="...">
                            <ul class="pagination">
                                <?php if($start > 0) : ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?start=<?= $start-$num_post_per_pagina ?>">Previous</a>
                                        </li>
                                <?php endif; ?>
                                <?php for($i = 0; $i < $numero_pagine; $i++) : ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?start=<?= $i*$num_post_per_pagina ?>"><?= $i+1 ?></a>
                                        </li>
                                <?php endfor; ?>
                                <?php if($start != ($numero_posts_totali-$numero_post_inpaginati)) : ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?start=<?= $start+$num_post_per_pagina ?>">Next</a>
                                        </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
           </div>
        </div>
        <aside>
            <?php include 'includes/sidebar.php'; ?>
        </aside>
    </div>

    