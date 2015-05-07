<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("upload");
		if(isset($_GET['id'])) {
		// if id is set then get the file with the id from database
		$id    = $_GET['id'];
		$query = "SELECT name, type, size, content " . "FROM files WHERE id = '$id'";
		$result = mysql_query($query) or die('Error, query failed');
		list($name, $type, $size, $content) =  mysql_fetch_array($result);
		header("Content-length: $size");
		header("Content-type: $type");
		header("Content-Disposition: attachment; filename=$name");
		echo $name;
		exit;
		}
	?>

	
</body>
</html>