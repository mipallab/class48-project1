<?php
	
	session_start();

	require_once('functions.php');
	
	if (isset($_SESSION['login'])) {
		header('location: profile.php');

		die();
	}


	if ( isset($_POST['registerClick']) ) {
		
		$fName = $_POST['fname'];
		$lName = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];


		$error = array();

		if ($fName == NULL) {
			$error['frist_name'] = "Frist Name is empty";
		}

		if ($lName == NULL) {
			$error['last_name'] = "Last Name is empty";
		}

		if ($email == NULL) {
			$error['email'] = "email is empty";
		}

		if ($password == NULL) {
				$error['password'] = "Password is empty";
		} 

		elseif(strlen($password) < 8) {
			$error['password'] = "Password must be 8 charecters.";
		}

		// email exists

		
		

		if (email_exists()) {
			$error['email'] = "email already exists. Please try another email.";
		}


		if (count($error) == 0) {
			mysqli_query($database_connection, "INSERT INTO person (fast_name, last_name, email, password) VALUES ('$fName', '$lName', '$email', '$password')");


			$success = "Your form summit successfully. Please <a href='login.php'> Log In </a>";
		}


	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Form</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	

	<form action="" method="POST">
		<h1>Register Form</h1>
		<label for="fname">First Name:</label> <br>
		<input type="text" name= "fname" id= "fname"> <br>
			<div class="error">
				<?php
					if (isset($error['frist_name'])) {
						echo $error['frist_name'];
					}
				?>
			</div>
		<br>

		<label for="lname">Last Name:</label> <br>
		<input type="text" name= "lname" id= "lname"> <br>
			<div class="error">
				<?php
					if (isset($error['last_name'])) {
						echo $error['last_name'];
					}
				?>
			</div>
		<br>

		<label for="email">email address:</label> <br>
		<input type="email" name= "email" id= "email"><br>
			<div class="error">
				<?php
					if (isset($error['email'])) {
						echo $error['email'];
					}
				?>
			</div>
		<br>

		<label for="password">Password:</label> <br>
		<input type="password" name= "password" id= "password"><br>
			<div class="error">
				<?php
					if (isset($error['password'])) {
						echo $error['password'];
					}
				?>
			</div>		
		<br>


		<input type="submit" value = "register" name= "registerClick">
		<br> <br>
		<div class="success">
			<?php

				if (isset($success)) {
					echo $success;
				}

			?>
		</div>

	</form>

</body>
</html>			