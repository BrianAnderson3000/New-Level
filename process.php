
<?php
include 'database.php';
include 'dbconnect.php';


$target_dir = "C:\\xampp\htdocs\New Level\Images\\";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}










$target_dir1 = "C:\\xampp\htdocs\New Level\Images\\";
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check1 = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check1 !== false) {

        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
    echo "Sorry, file already exists.";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}













// create a variable
$catergoryID=mysqli_real_escape_string($dbconnect,$_POST['catergoryID']);
$Name=mysqli_real_escape_string($dbconnect,$_POST['Name']);
$imgThumb=mysqli_real_escape_string($dbconnect,$_POST['imgThumb']);
$img1=mysqli_real_escape_string($dbconnect,$_POST['img1']);
$paragraph1=mysqli_real_escape_string($dbconnect,$_POST['paragraph1']);
$paragraph2=mysqli_real_escape_string($dbconnect,$_POST['paragraph2']);
$paragraph3=mysqli_real_escape_string($dbconnect,$_POST['paragraph3']);
$paragraph4=mysqli_real_escape_string($dbconnect,$_POST['paragraph4']);
$paragraph5=mysqli_real_escape_string($dbconnect,$_POST['paragraph5']);
$paragraph6=mysqli_real_escape_string($dbconnect,$_POST['paragraph6']);





if($Name == ""){
  echo "Please enter an item name.</br><a href='admin.php'>Go Back</a>";
  return false;
}


//Execute the query
else{

mysqli_query($connect,"INSERT INTO stock (catergoryID,Name,imgThumb,img1,paragraph1,paragraph2,paragraph3,paragraph4,
paragraph5,paragraph6)
		        VALUES ('$catergoryID','$Name','$imgThumb','$img1','$paragraph1','$paragraph2','$paragraph3','$paragraph4',
            '$paragraph5','$paragraph6')");

	if(mysqli_affected_rows($connect) > 0){
	echo "Item Added</br>";

} else {
	echo 'Item NOT Added</br><a href="admin.php">Go Back</a>';
	echo mysqli_error ($connect);
}
}




?>

<a href="admin.php">Go Back</a></br>

<p><a href="admin.php?page=admin&logout=true">Logout</a></p>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</html>
