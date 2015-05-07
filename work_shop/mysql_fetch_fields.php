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
			$field_info = mysqli_fetch_fields($result);
			foreach ($field_info as $val) {
				printf("Name: %s\n", $val->name);
				printf("Table: %S\n", $val->table);
				printf("max. Len: %d\n", $val->max_length);
			}
			

			mysqli_free_result($result);
		}
		mysqli_close($con);
	?>
</body>
</html>