<?php 
include('validation.php');
?>
<?php
if (isset($_POST)){
		
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