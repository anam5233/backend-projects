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
		// set auto commit to off
		// mysqli_autocommit($con, FALSE);

		mysqli_query($con, "INSERT INTO demo_book(f_name, l_name, occupation)
			VALUES ('jen', 'doe', 'executive')");

		// commit transaction 
		mysqli_commit($con);

	?>
	
</body>
</html>