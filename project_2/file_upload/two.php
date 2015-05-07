<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file_upload</title>
</head>
<body>
<?php 
	if (!isset($_POST['submit'])) { ?>

	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="hidden" name = "MAX_FILE_SIZE" value="8000000">
		select file:
		<input type="file" name="data" id="data">
		<input type="submit" value="upload file" name="submit">
		
	</form>
	<?php 
		}else{
			// check uploaded file size
			if ($_FILES['data']['size'] == 0) {
				die("ERROR: Zero byte file upload");
			}
			// end of the if
			// check if the file type is allowed
			$allowed_file_types = array("image/gif","image/jpeg","image/jpg");

			if (!in_array($_FILES['data']['type'], $allowed_file_types)) {
				die("ERROR: File type not permitted");
			}
			// end of the if
			// check if this is a valid upload
			if (!is_uploaded_file($_FILES['data']['tmp_name'])) {
				die("ERROR: Not a valid upload");
			}
			// end of the if
			// set the name of the target directory
			$upload_dir = "uploads/";
			// copy the uploaded file to the directory
			move_uploaded_file($_FILES['data']['tmp_name'], $upload_dir . $_FILES['data']['name'])
				or
			die("Cannot copy uploaded fiels");

			// display successfully message
			echo "File successfully uploaded to ". $upload_dir. $_FILES['data']['name'];
		}

	 ?>
		
	


	
</body>
</html>