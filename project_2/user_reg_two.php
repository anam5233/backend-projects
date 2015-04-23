<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user reg form 2</title>
	<link rel="stylesheet" href="css/user_reg_two.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	
</head>
<body>

<header class="text-center">
	<div class="container">
		<div class="row">
			<h2>check the below information</h2>
			<div class="user">
				<span>User :</span>
				<span>anam5233</span>
			</div>
		</div>
		<!-- end of the /.row -->
	</div>
	<!-- end of the /.container -->
</header>
<!-- end of the header -->

<section class="mytable">
	<div class="container">
		<div class="row">

			<table class="table table-bordered">
				<tr>
					<td>first name</td>
					<td>middle name</td>
					<td>last name</td>
				</tr>
				<tr>
					<td>email</td>
					<td>date of birth</td>
					<td>gender</td>
				</tr>
				<tr>
					<td colspan="3">address</td>
					
				</tr>
				<tr>
					<td>occupation</td>
					<td>phone</td>
					<td>fax</td>
				</tr>
				<tr>
					<td>zip/postal code</td>
					<td>district</td>
					<td>country</td>
				</tr>
			</table>

		</div>
		<!-- end of the /.row -->
	</div>
	<!-- end of the /.container -->
</section>
<!-- end of the /.mytable -->

<!-- photo and signature -->
<section class="myform">
	<div class="container">
		<div class="row">
			<form action="">
				<div class="form-group">
					<div class="photo">
						<form action="">
							<div class="col-lg-8">
								<label for="">upload your photo</label><br>
								<input type="file" name="" id="" class="" required>
								<p class="help-block">Picture size maximum 1MB and resulation should be (300*300) px and file format must be .jpeg/.jpg</p>
							</div>
							<div class="col-lg-4 text-right upload">
								<button class="btn btn-default">
									upload
								</button>
							</div>
						</form>
					</div>

					<div class="clearfix"></div>

					<div class="signature">
						<form action="">
							<div class="col-lg-8">
								<label for="">upload your signature</label><br>
								<input type="file" name="" id="" class="" required>
								<p class="help-block">Picture size maximum 500KB and resulation should be (180*90) px and file format must be .jpeg/.jpg</p>
							</div>
							<div class="col-lg-4 text-right upload">
								<button class="btn btn-default">
									upload
								</button>
							</div>
						</form>
					</div>
				</div>
				<!-- end of the /form-group -->
				<div class="form-group text-center final-submit">
					<a href="" class="btn btn-default">
						submit
					</a>
				</div>
				<!-- end of the /.form-group -->
			</form>
			<!-- end of the form -->
		</div>
		<!-- end of the /.row -->
	</div>
	<!-- end of the /.container -->
</section>
<!-- end of the /.myform -->

	

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>

	<!-- // <script src="js/myscript.js"></script> -->
</body>
</html>