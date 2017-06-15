<!-- Main Content -->
    <div class="container container-content-sidebar">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <?php $propertyResult = SelectPosts();?>      
                <?php while ($row = mysqli_fetch_array($propertyResult)) : ?>                
                        <div class="post-preview">
                                <a class="left" href="post.html">
                                    <h2 class="post-title">
                                        <?= $row['Title']?>
                                    </h2>
                                    <h3 class="post-subtitle">
                                        <?= "Author: ".$row['Author']."<br>Genre: ".$row['Genere']?>
                                    </h3>
                                    <h4>
                                        <?= substr($row['Review'], 0, 150)."..."?>
                                    </h4>
                                </a>
                                    <?php  echo '<img class="img-post" src="data:image/jpg;base64,'.base64_encode($row['Immagine']).'">';?>
                            <p class="post-meta">Posted by Marco on <?= $row['DatePost']?></p>
                        </div>
                        <hr>
                <?php endwhile; ?>
           </div>
        </div>
        <aside>
            <?php include 'includes/sidebar.php'; ?>
        </aside>
    </div>