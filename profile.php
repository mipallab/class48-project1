<?php
	session_start();

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
	<title>profile</title>
</head>
<body>
	<h1>Welcome to Profile.</h1>

	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, ratione. Odio temporibus dicta sed quasi quaerat labore impedit officia. Labore, excepturi, quibusdam odit facere explicabo autem ratione modi distinctio molestiae inventore recusandae, porro sapiente odio vero sequi maxime incidunt nisi ea dolor tempora repellat necessitatibus. Possimus autem consequuntur, sint, commodi eius voluptatum blanditiis incidunt nulla hic unde, nesciunt, deleniti architecto optio facilis esse numquam itaque eos vel. Commodi, debitis culpa deserunt asperiores placeat nostrum vel quisquam voluptas recusandae iure labore esse officiis est ex consequatur, blanditiis fugit repellendus, beatae, tenetur? Atque ipsa eaque cupiditate dolorem, voluptate similique, accusantium repellendus nisi.</p>
	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, ratione. Odio temporibus dicta sed quasi quaerat labore impedit officia. Labore, excepturi, quibusdam odit facere explicabo autem ratione modi distinctio molestiae inventore recusandae, porro sapiente odio vero sequi maxime incidunt nisi ea dolor tempora repellat necessitatibus. Possimus autem consequuntur, sint, commodi eius voluptatum blanditiis incidunt nulla hic unde, nesciunt, deleniti architecto optio facilis esse numquam itaque eos vel. Commodi, debitis culpa deserunt asperiores placeat nostrum vel quisquam voluptas recusandae iure labore esse officiis est ex consequatur, blanditiis fugit repellendus, beatae, tenetur? Atque ipsa eaque cupiditate dolorem, voluptate similique, accusantium repellendus nisi.</p>
	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, ratione. Odio temporibus dicta sed quasi quaerat labore impedit officia. Labore, excepturi, quibusdam odit facere explicabo autem ratione modi distinctio molestiae inventore recusandae, porro sapiente odio vero sequi maxime incidunt nisi ea dolor tempora repellat necessitatibus. Possimus autem consequuntur, sint, commodi eius voluptatum blanditiis incidunt nulla hic unde, nesciunt, deleniti architecto optio facilis esse numquam itaque eos vel. Commodi, debitis culpa deserunt asperiores placeat nostrum vel quisquam voluptas recusandae iure labore esse officiis est ex consequatur, blanditiis fugit repellendus, beatae, tenetur? Atque ipsa eaque cupiditate dolorem, voluptate similique, accusantium repellendus nisi.</p>

	<div class="member">
		<a href="members.php">member page</a>
	</div>
	
	<a href="logout.php">logout</a>
</body>
</html>