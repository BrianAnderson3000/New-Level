</br><h1>Welcome Back!</h1></br>
<p>Please login to access your administration panel:</p></br>
<div class="form-group">
<form action="admin.php" method="post">
	<div class="text-left">
	<label>Username:</label>
</div>
	<input class="form-control" type="text" maxlength="10" name="username" /></br>
	<div class="text-left">
		<label> Password:</label>
	</div>
	<input class="form-control" maxlength="10" name="password" type="password" /></br>
	<?php
	if(isset($_GET['error'])) {
		echo "Incorrect username or password";
	}

	?>
</br>
	<p><button class="btn btn-primary" type="submit" name="login" />Login</button>
</div>
</form>
