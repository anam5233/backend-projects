<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>affected row</title>
</head>
<body>
	<?php 

		$con = mysqli_connect("localhost", "root", "", "my_demo");
		if (mysqli_connect_errno()) {
					echo "failed to connect to MySQL: ". mysqli_connect_error();
				}		

		// perform queries and print out affected rows
		mysqli_query($con, "SELECT * FROM demo_book");
		echo "Affected rows : " .mysqli_affected_rows($con);

	?>
	
</body>
</html>