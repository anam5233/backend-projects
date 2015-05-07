<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if (isset($_FILES['filefield'])) {
			$file = $_FILES['filefield'];
			$upload_directory = 'uploads/';
			$ext_str = "gif, jpg, jpeg, png";
			$allowed_extensions = explode(',', $ext_str);
			$max_file_size = 10485760;

			// check allowed extension here
			$ext = substr($file['name'], strrpos($file['name'], '.') + 1);
			// get file extension from last sub string from last . character

			if (!in_array($ext, $allowed_extensions)) {
				echo "only". $ext_str. "files allowed to upload<br>";
				// exit the script by warning
			}
			// end of the if

			if ($file['size'] >= $max_file_size) {
				echo "only the file less than" . $max_file_size . "mb allowed to upload";
				// exit the script by warning
			}
			// end of the if

			$path = md5(microtime()).'.'.$ext;

			if (move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {
				mysql_connect("localhost", "root", "");
				mysql_select_db("upload");
				echo "your file successfully uploaded";
				mysql_query("INSERT INTO gravator VALUES ('', '$path')");
			}
			else{
				echo "The file cannot moved to target directory.";
			}

		}
		// Hurrey we uploaded a file to server successfully.
	 ?>

	 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
	 	<label for="">
	 		uploaded file
	 		<input type="file" name="filefield" id="filefield">
	 	</label>
	 	<!-- end of the label -->

	 	<label for="">
	 		<input type="submit" value="upload" id="upload" name="upload">
	 		<input type="hidden" name="MAX_FILE_SIZE" value="100000">
	 	</label>
	 </form>
	 <!-- end of the form -->

</body>
</html>