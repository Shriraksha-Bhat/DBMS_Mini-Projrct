<?php
session_start();
$db_customer = "root";
$db_pass = "";
$db_name = "movie";
$message="";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_customer, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['login_customer'])){
		
		$sql = " SELECT * FROM customer WHERE email= :email AND password= :password";
		$statement =$db->prepare($sql);
		$result = $statement->execute(
							array(
								'email'=>$_POST["email"],
								'password' => $_POST["password"]
							)
						);
		$count= $statement->rowCount();
		if($count >0)
		{
			$_SESSION["email"]=$_POST["email"];
			echo "Logged in successfully";
		}
		else

		{
			echo "Invalid E-mail/Password";
		}
		
		
	}
	
?>	