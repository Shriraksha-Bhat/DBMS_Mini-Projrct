<?php include ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div>
		<form class="box" action="registration.php" method="post">

						<h1>Registratin</h1>

						<input id="firstname" placeholder="Enter First Name" type="text"  name="" required>

						<input  id="lastname" placeholder="Enter Last Name" type="text" name="" required>

						<input id="email" placeholder="Enter E-mail" type="email" name="" required>

						<input id="phonenumber" placeholder="Enter Phone Number" type="text" name="" required>

						<input id="password" placeholder="Enter Password" type="password" name="" required>

						<hr class="md-3">

						<input class="btn btn-primary" type="submit" id="register" name="create" value="Register">
						<p>Already a user?<a href="login.php"> Log in</a></p>

		</form>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script type="text/javascript">
		$(function(){
			$('#register').click(function(e){
				var valid = this.form.checkValidity();

				

				if(valid){

					var firstname = $('#firstname').val();
					var lastname = $('#lastname').val();
					var email = $('#email').val();
					var phonenumber = $('#phonenumber').val();
					var password = $('#password').val();
					e.preventDefault();

					$.ajax({
						type:'POST',
						url:'process.php',
						data:{firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password },
						success: function(data){
							Swal.fire({
								'title':'Successful',
								'text':data,
								'type':'success'
							})

						},
						error: function(data){
							Swal.fire({
								'title':'Errors',
								'text':'There are errors while saving the data',
								'type':'error'
							})

						}



					});

				}else{	
					
				}

				

			});
			
		});
	</script>
</body>
</html>