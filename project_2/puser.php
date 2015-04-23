<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User</title>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style1.css">
</head>
<body>
	
<header>
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 text-center">

				<div class="myform text-center">
					<a href="http://projukti.net/" target="_blank">
						<img src="img/mylogo.png" alt="">
					</a>
					<h2>projukti corporation</h2>
					<form action="index.php" method="post">
						<h3>User login</h3>
						<div class="form-group">
							<input type="text" name="username" id="username" class="form-control" placeholder="type your username" required>
							<input type="password" name="password" id="password" class="form-control" placeholder="type your password" required>

						</div>
						<!-- end of the /.form-group -->

						<button type="submit" class="btn btn-default submit"><i class="fa fa-check"></i>Submit</button>
						<a href="forgot.php" target="_blank" class="btn btn-default forgot"><i class="fa fa-envelope-o"></i>forgot password</a>

					</form>
				<!-- end of the form -->
					

				</div>
				<!-- end of the /.myform -->

				<div class="register">
					<a href="preg.php"><i class="fa fa-gear"></i>Register</a>
				</div>
				<!-- end of the /.register -->

			</div>
			<!-- end of the /.col-lg-12 -->
			
		</div>
		<!-- end of the /.row -->
	</div>
	<!-- end of the /.container -->
</header>

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap"></script>
</body>
</html>