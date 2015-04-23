<?php 	include "pbdconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>projukti admin</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
		include "reguser.php";		
	}

	elseif (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$password = md5(mysql_real_escape_string($_POST['password']));

		$checklogin = mysql_query("SELECT * FROM pusers WHERE Username = '".$username."'AND Password = '".$password."'");

		if (mysql_num_rows($checklogin) == 1) {
			$row = mysql_fetch_array($checklogin);
			$email = $row['EmailAddress'];


			$_SESSION['Username'] = $username;
			$_SESSION['EmailAddress'] = $email;
			$_SESSION['LoggedIn'] = 1;

			include "success.php";
			 // echo "<h1>Success</h1>";
    //     echo "<p>We are now redirecting you to the member area.</p>";
    //     echo "<meta http-equiv='refresh' content='=2;index.php' />";
		}
		else{
			include "404.php";
		}
	}
	else{
		include "puser.php";
	}

?>

</body>
</html>