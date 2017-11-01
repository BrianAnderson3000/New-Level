<?php
if(!isset($_GET['stockID'])) {
    header("Location: index.php");
}

$item_sql="SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
if($item_query=mysqli_query($dbconnect, $item_sql)) {
    $item_rs=mysqli_fetch_assoc($item_query);
    ?>
<div id="itemwrapper">

<h2  class="display-4 mb-4 mt-3" id="name"><?php echo $item_rs['name']; ?></h2>
  <div id="moon2"><img class="" id="moon" src="Images/<?php echo
  $item_rs['img1']; ?>" alt="First Image"></div>






<p class="lead text-left mb-4"><?php echo $item_rs['paragraph1']; ?></p>
<p class="lead mb-4"><?php echo $item_rs['paragraph2']; ?></p>
<p class="lead text-left mb-4"><?php echo $item_rs['paragraph3']; ?></p>
<p class="lead text-left mb-4"><?php echo $item_rs['paragraph4']; ?></p>
<p class="lead text-left mb-4"><?php echo $item_rs['paragraph5']; ?></p>
<p id="iframe" class="lead text-left mb-4"><?php echo $item_rs['paragraph6']; ?></p>











</div>
    <?php
}




?>
