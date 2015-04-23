<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration form 1</title>
	<link rel="stylesheet" href="css/regform.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>
	
	<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<header class="text-center">
		<div class="container">
			<div class="row">
				<div class="header-text">
					<h2>EOI APPLICATION FORM FOR EEF SUPPORT</h2>
					<p class="date">
						<span>Ref. No.: ICB/EEF/49.2/EOI/2011/</span>
						<span class="text-right">
							<input class="form-control" type="text" id="datepicker" placeholder="pick your date" required>
						</span>
					</p>
				</div>
				<div class="clearfix"></div>
				<h3>EOI APPLICATION FORM step 1 </h3>
			</div>
			<!-- end of the /.row -->
		</div>
		<!-- end of the /.container -->
	</header>
	<!-- end of the /.header -->

	<section class="myform">\
		<div class="container">
			<div class="row">
				<form action="regform2.php">

					<div class="form-group form-row">
						<label for="">1. Name of the Company</label>
						<input type="text" name="" id="" class="form-control" placeholder="your company name" required>
					</div>
					<!-- end of the div/.form-row -->

					<div class="form-group form-row">
						<label for="">2. Date of Incorporation</label>
						<input type="text" name="" id="" class="form-control" placeholder="Date of Incorporation" required>
					</div>
					<!-- end of the div/.form-row -->

					<div class="form-group form-row">
						<label for="">3. Legal Status</label>
						<input type="text" name="" id="" class="form-control" placeholder="your legal status" required>
					</div>
					<!-- end of the div/.form-row -->
					
					<div class="form-group form-row">
						<label for="">4. Registered Address</label>
						<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="write your registered address here" required></textarea>
					</div>
					<!-- end of the div/.form-row -->
<div class="clearfix"></div>
					<div class="form-group form-row form-tel">

						<div class="form-group col-lg-6">
							<label for="">Tel</label>
							<input type="text" name="" id="" class="form-control" placeholder="write your telephone number" required>
						</div>
						<div class="form-group col-lg-6 fax">
							<label for="">Fax</label>
							<input type="text" name="" id="" class="form-control" placeholder="write your fax number" required>
						</div>						

					</div>
					<!-- end of the div/.form-row -->
					<div class="form-group form-row form-tel">

						<div class="form-group col-lg-6">
							<label for="">E-mail</label>
							<input type="email" name="" id="" class="form-control" placeholder="email address" required>
						</div>
						<div class="form-group col-lg-6 fax">
							<label for="">Web</label>
							<input type="text" name="" id="" class="form-control" placeholder="your web address" required>
						</div>						

					</div>
					<!-- end of the div/.form-row -->

					<div class="form-group form-table">
						<label for="">5. Sponsors/Shareholders</label>
						<table class="table table-bordered" id="mytable">
							<tr>
								<th>sl.</th>
								<th>name of the sponsors/shareholder</th>
								<th>Designation</th>
								<th>Nationality</th>
								<th>Percentage/Ratio of share holding</th>
								<th>years of experience in IT business</th>
								<th>taking part in management(y/n)</th>
								
							</tr>
							<tr>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
							</tr>
							<tr>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
								<td><input type="text" name="" id="" class="form-control" required></td>
							</tr>
							
						</table>
						<!-- end of the table -->
					</div>
					<!-- end of the /.form-group -->

					<div class="form-group addremove">
						<a  id="addRow" class="btn btn-default" onclick="myCreateFunction()">add row</a>
						<a  id="deleteRow" class="btn btn-default" onclick="myDeleteFunction()">delete row</a>
					</div>

					<div class="form-group form-submit">
						<button type="submit" class="btn btn-primary">Next</button>
					</div>

					



				</form>
			</div>
			<!-- end of the /.row -->
		</div>
		<!-- end of the /.container -->
	</section>
	<!-- end of the /.myform -->

	<!-- // <script src="js/myscript.js"></script> -->
</body>
</html>