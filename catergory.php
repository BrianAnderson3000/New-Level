<?php
    if(!isset($_GET['catergoryID'])) {
        header("Location:index.php");
    }

    $stock_sql="SELECT stock.stockID, stock.name,stock.imgThumb,
    stock.img1, stock.paragraph1, stock.paragraph2, stock.paragraph3,
    stock.paragraph4, stock.paragraph5, stock.paragraph6,
    catergory.name AS catname FROM stock
    JOIN catergory ON stock.catergoryID=catergory.catergoryID
    WHERE stock.catergoryID=".$_GET['catergoryID'];
if($stock_query=mysqli_query($dbconnect, $stock_sql)) {
    $stock_rs=mysqli_fetch_assoc($stock_query);
}

if(mysqli_num_rows($stock_query)==0) {
    echo "Sorry, no items to display";
}

else {
   do {
        ?>
    <body>
        <a href="index.php?page=item&stockID=<?php echo $stock_rs['stockID']; ?>">

        <div class="mt-4 text-center" id="item">
        <div class="item_box">
        <p><img class="thumb" src="Images/<?php echo $stock_rs['imgThumb']; ?>"/></p>
        <p id="title" class="lead"><?php echo $stock_rs['name']; ?></p>
        </a>
        </div>
        </div>
      </body>
<?php
    } while($stock_rs=mysqli_fetch_assoc($stock_query));
    ?>


    <?php
}
?>
