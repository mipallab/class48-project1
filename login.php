<?php
	session_start();
	require_once('functions.php');

	if (isset($_SESSION['login'])) {
		header('location: profile.php');

		die();
	}

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$error = array();
		if ($password == NULL) {
			$error['password'] = "Enter your password";
		}
		if ($email == NULL) {
			$error['email'] = "Enter your email";
		}

		elseif (email_exists()) {

			$password_query = mysqli_query($database_connection,"SELECT password FROM person WHERE email = '$email'");
			$password_row = mysqli_fetch_assoc($password_query);


			if ($password == $password_row['password']) {
				
				$_SESSION['login'] = "login success";
				header('location:profile.php');
			}
			else {
				$error['password'] = "password doesn't match";
			}
		}else {
			$error['email'] = "email doesn't exists in database.";
		}





	}
	



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<style>
	.error{
		color: red;
		font-style: italic;
	}
</style>
<body>
	
	<form action="" method = "POST">
		<h1>Log in</h1>
		<label for="email">Email</label> <br>
		<input type="email" id= "email" name = "email">
		<br>
			<div class="error">
				<?php

					if (isset($error['email'])) {
						echo $error['email'];
					}

				?>
			</div>	
		<br>
		<label for="password">Password</label> <br>
		<input type="password" id= "password" name = "password">
		<br>
			<div class="error">
				<?php

					if (isset($error['password'])) {
						echo $error['password'];
					}

				?>
			</div>
		<br>
		<input type="submit" value='Log in' name = "login">


	</form>

</body>
</html>