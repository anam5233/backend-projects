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
			$row = mysqli_fetch_row($result);
			foreach (mysqli_fetch_lengths($result) as $i => $value) {
				printf("Field %2d has length : %2\n", $i+1, $value);
			}

			

			mysqli_free_result($result);
		}
		mysqli_close($con);
	?>
</body>
</html>