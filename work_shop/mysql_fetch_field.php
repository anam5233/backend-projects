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
			$field_info = mysqli_fetch_field($result);
			printf("Name: %s\n", $field_info->name);
			printf("Table: %S\n", $field_info->table);
			printf("max. Len: %d\n", $field_info->max_length);

			mysqli_free_result($result);
		}
		mysqli_close($con);
	?>
</body>
</html>