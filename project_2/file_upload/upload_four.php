<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload_four</title>
</head>
<body>
	<?php 
		mysql_connect("localhost", "root", "");
		mysql_select_db("upload");
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$query = "SELECT name, type, size, content FROM files WHERE id = $id";
			$result = mysql_query($query) or die('Error, query failed');
			list($name, $type, $size, $content) = 
			mysql_fetch_array($result);

			header("Content-length:$size");
			header("Content-type:$type");
			header("Content-Disposition:attachment; filename = $name");
			echo $content; exit;
		}

	?>
	Download file from mysql

	<?php 
		$query = "SELECT id, name FROM files";

		$result = mysql_query($query) or die('Error, query failed');

		if (mysql_num_rows($result) == 0) {
			echo "database is empty";
		}
		else{
			while (list($id, $name) = mysql_fetch_array($result)) {
				?>
				<a href="download2.php?id=<?php echo $id;?>">
					<br><?php echo $name; ?>
				</a>
				<?php
			}
		}

	?>
</body>
</html>