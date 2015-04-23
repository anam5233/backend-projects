<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration form 5</title>
	<link rel="stylesheet" href="css/regform5.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript5.js"></script>


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
							<!-- <input class="form-control" type="text" id="datepicker" placeholder="pick your date" required> -->
							your date here
						</span>
					</p>
				</div>
				<div class="clearfix"></div>
				<h3>EOI APPLICATION FORM step 5 </h3>
			</div>
			<!-- end of the /.row -->
		</div>
		<!-- end of the /.container -->
	</header>
	<!-- end of the /.header -->

	<section class="myform">\
		<div class="container">
			<div class="row">
				<form action="">

					<!-- part 10
					=============================== -->
					<div class="form-group business-operation">
						<label for="">10. Describe if your Company have association with foreign company in the form of</label>
						<div class="col-lg-12">
							<div class="form-group form-row">
								<label for="">10.1. Technical arrangements</label>
								<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="Describe Technical arrangements" required></textarea>
							</div>
<div class="clearfix"></div>
							<div class="form-group form-row">
								<label for="">10.2. Outsourcing arrangements</label>
								<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="Describe Outsourcing arrangements" required></textarea>
							</div>
<div class="clearfix"></div>
							
							<div class="form-group form-row">
								<label for="">10.3. Equity Partnership</label>
								<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="Describe Equity Partnership" required></textarea>
							</div>
						</div>
						<!-- end of the /.col-lg-12 -->
					</div>
					<!-- end of the /.form-group -->
					
					<!-- part 11
					=============================== -->
					<div class="form-group form-table">
						<label for="">11. Current Resource Team</label>
						<table class="table table-bordered" id="myTable">
							<tr>
								<th>sl.</th>
								<th>name</th>
								<th>age</th>
								<th>Designation</th>
								<th>academic background</th>
								<th>year of service</th>
								<th>experience in related field</th>																
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
						<div class="form-group addremove">
							<a id="addRow" class="btn btn-default" onclick="myCreateFunction()">add row</a>
							<a  id="deleteRow" class="btn btn-default" onclick="myDeleteFunction()">delete row</a>
						</div>
					</div>
					<!-- end of the /.form-group -->

					<!-- part 12
					=============================== -->
					<div class="form-group form-table">
						<label for="">12. Proposed Resource Team</label>
						<table class="table table-bordered" id="myTable2">
							<tr>
								<th>sl.</th>
								<th>position</th>
								<th>number</th>
								<th>qualification & experience</th>
								
								
							</tr>
							<tr>
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
								
							</tr>
							
						</table>
						<!-- end of the table -->
						<div class="form-group addremove">
							<a id="addRow" class="btn btn-default" onclick="myCreateFunctionSecond()">add row</a>
							<a id="deleteRow" class="btn btn-default" onclick="myDeleteFunctionSecond()">delete row</a>
						</div>
					</div>
					<!-- end of the /.form-group -->




					<div class="form-group form-submit">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>



				</form>
			</div>
			<!-- end of the /.row -->
		</div>
		<!-- end of the /.container -->
	</section>
	<!-- end of the /.myform -->

	
</body>
</html>