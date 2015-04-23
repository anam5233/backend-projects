<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration form 2</title>
	<link rel="stylesheet" href="css/regform2.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
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
				<h3>EOI APPLICATION FORM step 2 </h3>
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

					<!-- part 6
					=============================== -->
					<div class="form-group business-operation">
						<label for="">6. Brief description of current business operation if any: (Within Maximum 100 words in each section)</label>
						<div class="col-lg-12">
							<div class="form-group form-row">
								<label for="">6.1. Operation Brief</label>
								<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="Explain your current business operation" required></textarea>
							</div>
<div class="clearfix"></div>
							<div class="form-group form-row">
								<label for="">6.2. Competitors</label>
								<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="Explain your current market strength/advantage vis-à-vis competitors" required></textarea>
							</div>
<div class="clearfix"></div>						
							<div class="form-group form-row">
								<label for="">6.3. Customer Value Proposition</label>
								<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="Explain why customer will purchase your product or service" required></textarea>
							</div>
<div class="clearfix"></div>
							<div class="form-group form-row">
								<!-- <label for="">6.4. Business Partners</label> -->
								<div class="clearfix"></div>
								<div class="form-group col-lg-6 business-partner business-ex">
									<label for="">6.4 How profile/experience of Business partner(s)</label>
									<select name="" id="" class="form-control">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>

								<div class="form-group col-lg-6 business-partner">
									<label for="">6.5 Intellectual Property (Describe if any item below is applicable)</label>
									<select name="" id="" class="form-control">
										<option value="0">Copyright</option>
										<option value="Trade">Trade</option>
										<option value="Secrets">Secrets</option>
										<option value="Inventions">Inventions</option>
										<option value="Processes">Processes</option>
										<option value="Contract">Contract</option>
										<option value="License Agreement">License Agreement</option>
										<option value="Agreement">Agreement</option>										
									</select>
								</div>								
							</div>
							<!-- end of the /.form-group -->
<div class="clearfix"></div>
							<div class="form-group financial">
								<label for="">6.6. Financials</label>
								<div class="form-group">
									<div class="col-lg-4">
										<label for="">6.6a. Sales for the last 3 years</label>
										<input type="text" name="" id="" class="form-control col-lg-4" placeholder="Sales for the last 3 years" required>
									</div>
									<div class="col-lg-4">
										<label for="">6.6b. Profit for the last 3 years</label>
										<input type="text" name="" id="" class="form-control col-lg-4" placeholder="Profit for the last 3 years" required>
									</div>
									<div class="col-lg-4">
										<label for="">6.6c. Receivables position for the last 3 years</label>
										<input type="text" name="" id="" class="form-control col-lg-4" placeholder="Receivables position for the last 3 years" required>
									</div>									
								</div>
								<!-- end of the /.form-group -->

								<div class="form-group">
									<div class="col-lg-6">
										<label for="">6.6d. Total borrowing (Banks/Financial/Personal) position for the last 3 years</label>
										<input type="text" name="" id="" class="form-control col-lg-4" placeholder="Please mention name of Banks/Financial Institutions" required>
									</div>
									<div class="col-lg-6">
										<label for="">6.6e. Capital position for the last 3 years.</label>
										<input type="text" name="" id="" class="form-control col-lg-4" placeholder="Capital position for the last 3 years." required>
									</div>
																		
								</div>
								<!-- end of the /.form-group -->								
							</div>
							<!-- end of the /.form-group -->
						</div>
						<!-- end of the /.col-lg-12 -->
					</div>
					<!-- end of the /.form-group -->

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

	
</body>
</html>