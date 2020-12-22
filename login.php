<?php 
include ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div>
		<form class="box" action="login.php" method="post">
		
			<h1>Log In</h1>

			<input type="email" name="" placeholder="Enter Customer E-mail" id="customername">
			<input type="password" name="" placeholder="Enter Password" id="password">


			<input type="submit" name="login_customer" value="login">
			<hr class="md-3">
			
			<p>Not a Customer? <a href="registration.php">Register</p>
			<p><a href="adminlogin.php">Login as Admin</p>

		</form>
	</div>
	

</body>
</html>


