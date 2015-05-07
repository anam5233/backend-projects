<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload_three</title>
</head>
<body>
	<?php 

		if (isset($_POST['upload']) && $_FILES['userfile']['size']>0) {
			
			$file_name = $_FILES['userfile']['name'];
			$tmp_name = $_FILES['userfile']['tmp_name'];
			$file_size = $_FILES['userfile']['size'];
			$file_type = $_FILES['userfile']['type'];

			$fp = fopen($tmp_name, 'r');
			$content = fread($fp, filesize($tmp_name));
			$content = addslashes($content);

			fclose($fp);

			if (!get_magic_quotes_gpc()) {

				$file_name = addslashes($file_name);
			}
			// end of the if

			mysql_connect("localhost", "root", "");
			mysql_select_db("upload");

			$query = "INSERT INTO files (name, size, type, content)".
			"VALUES ('$file_name', '$file_size', '$file_type', '$content')";

			mysql_query($query) or die('Error, query failed');

			echo " File $file_name uploaded ";
		}
		else{
			echo "something went wrong";
		}

	?>




	<form action="" enctype="multipart/form-data" method="post">
		<table width="350" border="0" cellspacing="1" cellpadding="1">
			<tbody>
				<tr>
					<td width="246">
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
						<input type="file" name="userfile" id="userfile">
					</td>
					<td width="80">
						<input type="submit" value="upload" id="upload" name="upload">
					</td>
				</tr>
			</tbody>
			<!-- end of the tbody -->
		</table>
		<!-- end of the table -->
	</form>
	<!-- end of the form -->
</body>
</html>