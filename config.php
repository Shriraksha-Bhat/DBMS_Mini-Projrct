<?php

$db_customer = "root";
$db_pass = "";
$db_name = "movie";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_customer, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['create'])){
		$firstname     = $_POST['firstname'];
		$lastname      = $_POST['lastname'];
		$email         = $_POST['email'];
		$phonenumber   = $_POST['phonenumber'];
		$password      = $_POST['password'];

		$sql = " INSERT INTO customer (firstname,lastname,email,phonenumber,password) VALUES(?,?,?,?,?) ";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
		if ($result){
			echo "Successfully Saved";
		}else{
			echo "There were errors while saving the data";
		}
	}
?>	