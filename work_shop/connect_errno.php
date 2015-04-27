<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>auto commit</title>
</head>
<body>
	
	<?php 
		$con = mysqli_connect("localhost", "root", "", "my_demo");

		if (!$con) {
			die("connection error : " . mysqli_connect_errno());
		}

	?>

</body>
</html>