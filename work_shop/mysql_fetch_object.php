<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mysqli_free_result</title>
</head>
<body>
	<?php 
		$con = mysqli_connect("localhost","root","","my_demo");
		if (mysqli_connect_errno()) {
			echo "failed to connect to MySQL : " . mysqli_connect_error();
		}
		$sql = "SELECT * FROM demo_book";

		if ($result = mysqli_query($con, $sql)) {
			while ($obj = mysqli_fetch_object($result)) {
				printf("%s (%s)\n", $obj->f_name, $obj ->l_name);
			}
			}

			

			mysqli_free_result($result);
		
		mysqli_close($con);
	?>
</body>
</html>