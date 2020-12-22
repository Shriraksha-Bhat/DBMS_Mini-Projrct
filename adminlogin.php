<!DOCTYPE html>
<html lan="en" and dir="Itr">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form class="box" action="adminlogin.php" method="post">
		
		<h1>Log In</h1>

		<input type="email" name="" placeholder="Enter Admin E-mail" id="adminname">
		<input type="password" name="" placeholder="Enter Password" id="password">
		<input type="submit" name="" value="Log In" onclick="validate()">


	</form>
</body>
</html>


<script>
	function validate(){
		var adminname = document.getElementById("adminname").value;
		var password = document.getElementById("password").value;

		if (adminname == "shrirakshabhat@gmail.com" && password == "abcde" ) {
			alert("Login Successful");
			return false;
		}
		else{
			alert("Invalid");
		}
	}
</script>