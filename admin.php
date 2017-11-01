<?php
	include("dbconnect.php");
include("header.php");
	session_start();
	if(isset($_GET['logout'])) {
		unset($_SESSION['admin']);
	}

	if(isset($_POST['login'])) {
		$login_sql="SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".sha1($_POST['password'])."'";
		$login_query=mysqli_query($dbconnect, $login_sql);
		if(mysqli_num_rows($login_query)>0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['admin']=$login_rs['username'];
		} else {
			header("Location:admin.php?error=login");
		}
	}
?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>New Level Coding</title>
  <meta name="author" content="Brian Anderson">
	<link rel="stylesheet" href="Styles/main.css" />
	<meta name=”robots” content=”noindex,nofollow”>
</head>


<body>

<div class="container">

    <div class="maincontent">
 <!-- main content goes here-->
      <?php if(!isset($_SESSION['admin'])) {
		include("login.php");
		} else

		include("adminpanel.php");

		?>
  </div>


	<div class="footer"></div>
</div><!-- Container ends here-->
<footer class="lead">
	<p>&copy;New Level Coding</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
