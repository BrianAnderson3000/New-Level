<?php
$db = mysqli_connect('localhost', 'ninawb', 'Nina2014!', 'cochranguitars');
$Name = "";
$price    = "";
$imgThumb = "";
$img1    = "";
$img2 = "";
$img3    = "";
$img4 = "";
$img5   = "";
$paragraph1 = "";
$paragraph2    = "";


if (isset($_POST['submit_btn'])) {


	// call these variables with the global keyword to make them available in function
	global $db, $errors, $name,
  $imgThumb, $img1, $paragraph1, $paragraph2, $paragraph3, $paragraph4,
  $paragraph5, $paragraph6;

  $Name = e($_POST['Name']);
  $imgThumb = e($_POST['imgThumb']);
  $img1 = e($_POST['img1']);
  $paragraph1 = e($_POST['paragraph1']);
  $paragraph2 = e($_POST['paragraph2']);
  $paragraph3 = e($_POST['paragraph3']);
  $paragraph4 = e($_POST['paragraph4']);
  $paragraph5 = e($_POST['paragraph5']);
  $paragraph6 = e($_POST['paragraph6']);





			$query = "INSERT INTO stock (Name, imageThumb, img1,
       paragraph1, paragraph2, paragraph3, paragraph4, paragraph5,
     paragraph6)
					  VALUES('$Name', '$imgThumb', '$img1',
              '$paragraph1', '$paragraph2', '$paragraph3', '$paragraph4', '$paragraph5', '$paragraph6')";
			mysqli_query($db, $query);

			header('location: admin.php');

	}

  function e($val){
  	global $db;
  	return mysqli_real_escape_string($db, trim($val));
  }
