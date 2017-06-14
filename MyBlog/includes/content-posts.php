<!-- Main Content -->
    <div class="container container-content-sidebar">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <?php $propertyResult = SelectPosts();?>      
                <?php while ($row = mysqli_fetch_array($propertyResult)) : ?>                
                        <div class="post-preview">
                      
                            <a href="post.html">
                                <h2 class="post-title">
                                    <?= $row['Title']?>
                                </h2>
                                <h3 class="post-subtitle">
                                    <?= "Author: ".$row['Author']."<br>Genre: ".$row['Genere']?>
                                </h3>
                            </a>
                         <?php  echo '<img src="data:image/jpg;base64,'.base64_encode($row['Immagine']).'">';?>
                           
                            <p class="post-meta">Posted by Marco on <?= $row['DatePost']?></p>
                        </div>
                <?php endwhile; ?>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                </div>
           </div>
        </div>
        <aside>
            <?php include 'includes/sidebar.php'; ?>
        </aside>
    </div>