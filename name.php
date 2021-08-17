<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Print Name</title>
</head>
<body>


	<form method="POST">
		<label>Name</label>
		<input type="text" name="name">
		<button type="submit" name="submit">Button</button>
	</form>

	<?php 

	if(array_key_exists('submit', $_POST)){
		$name = $_POST['name'];

		echo '<h3>Your name is '.$name.' </h3>';
	} ?>

</body>
</html>