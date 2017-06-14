<link rel="stylesheet" type="text/css" href="css/StyleSidebar.css">
<div class="sidebar left">
  <ul class="list-sidebar bg-defoult">
    <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i><span class="nav-label"> Filter by Genre </span></a>
    </li>
	  <?php $propertyResult = SelectGenres();?>
      <?php while ($row = mysqli_fetch_array($propertyResult)): ?>
                <li> <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label"><?= $row['Genere']?></span></a></li>
      <?php endwhile; ?>
  </ul>
</div> 