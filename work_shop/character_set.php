<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>auto commit</title>
</head>
<body>
	<?php 
		$con = mysqli_connect("localhost", "root", "", "my_demo");
		if (mysqli_connect_errno()) {
			echo "failed to connect to MySQL : ". mysqli_connect_error();
		}
		$charset = mysqli_character_set_name($con);
		echo "default character set is :". $charset;

		mysqli_close($con);
	?>
	
</body>
</html>