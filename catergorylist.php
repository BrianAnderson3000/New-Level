<?php
$cat_sql="SELECT * FROM catergory";
$cat_query=mysqli_query($dbconnect, $cat_sql);
$cat_rs=mysqli_fetch_assoc($cat_query);


do { ?>
  <li class="nav-item mr-3"><a class="nav-link" href="index.php?page=catergory&catergoryID=<?php echo $cat_rs['catergoryID']; ?>"><h5>
    <?php echo $cat_rs['name']; ?>
  </h5></a></li>

  <?php
} while ($cat_rs=mysqli_fetch_assoc($cat_query))
?>
