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
			echo "failed to connect to mysql: ". mysqli_connect_error();
		}
		$sql = "SELECT * FROM demo_book";
		if ($result = mysqli_query($con, $sql)) {
			while ($row = mysqli_fetch_row($result)) {
				printf("%s (%s)\n", $row[1], $row[2]);
			}
			echo "<hr>";
			$free_result = mysqli_free_result($result);
			echo $free_result;
		}
		mysqli_close($con);
	?>
</body>
</html>