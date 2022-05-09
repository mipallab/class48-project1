<?php
	session_start();
	require_once('functions.php');

	if (!isset($_SESSION['login'])) {
		header('location: login.php');

		die();
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mambers</title>
</head>
<body>
	

	<table border="1px">
		
		<tr>
			<th>Frist Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Password</th>
		</tr>

		<?php
				
				$query = $database_connection -> query( "SELECT * FROM person");


			while ($row = $query -> fetch_object()) : ?>


				<tr>
					<td><?php echo $row -> fast_name; ?></td>
					<td><?php echo $row -> last_name; ?></td>
					<td><?php echo $row -> email; ?></td>
					<td><?php echo $row -> password; ?></td>
				</tr>

			<?php endwhile; ?>

	</table>


</body>
</html>