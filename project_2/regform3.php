<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration form 3</title>
	<link rel="stylesheet" href="css/regform3.css">
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
				<h3>EOI APPLICATION FORM step 3 </h3>
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

					<!-- part 7
					=============================== -->
					<div class="form-group">
						<label for="" class="headline">7. Market Strategy : (Please tick out appropriate box)</label>

						<div class="form-group market-stat">
							<label for="" class="sub-headline">7.1. Current </label>

							<label class="checkbox-inline">
							  <span>local market</span>
							  <input type="checkbox" id="" value="option1">
							</label>

							<label class="checkbox-inline">
								<span>export market</span>
							  	<input type="checkbox" id="inlineCheckbox2" value="option2">
							</label>

							<label class="checkbox-inline">
								<span>both</span>
							  	<input type="checkbox" id="inlineCheckbox3" value="option3">
							</label>							
						</div>

						<div class="form-group market-stat">
							<label for="" class="sub-headline">7.2. Proposed </label>

							<label class="checkbox-inline">
							  <span>local market</span>
							  <input type="checkbox" id="" value="option1">
							</label>

							<label class="checkbox-inline">
								<span>export market</span>
							  	<input type="checkbox" id="inlineCheckbox2" value="option2">
							</label>

							<label class="checkbox-inline">
								<span>both</span>
							  	<input type="checkbox" id="inlineCheckbox3" value="option3">
							</label>							
						</div>
					</div>
					<!-- end of the /.form-group -->


					<!-- part 8
					======================= -->
					<div class="form-group">
						<label for="" class="headline">8. Purpose for EEF assistance : (Please tick out appropriate box)</label>

						<div class="form-group market-stat">
							<label for="" class="sub-headline">8.1. Develop a new </label>

							<label class="checkbox-inline">
							  <span>project</span>
							  <input type="checkbox" id="" value="option1">
							</label>

							<label class="checkbox-inline">
								<span>porduct</span>
							  	<input type="checkbox" id="inlineCheckbox2" value="option2">
							</label>

							<label class="checkbox-inline">
								<span>service</span>
							  	<input type="checkbox" id="inlineCheckbox3" value="option3">
							</label>							
						</div>

						<div class="form-group market-stat">
							<label for="" class="sub-headline">8.2. Upgrade existing </label>

							<label class="checkbox-inline">
							  <span>project</span>
							  <input type="checkbox" id="" value="option1">
							</label>

							<label class="checkbox-inline">
								<span>porduct</span>
							  	<input type="checkbox" id="inlineCheckbox2" value="option2">
							</label>

							<label class="checkbox-inline">
								<span>service</span>
							  	<input type="checkbox" id="inlineCheckbox3" value="option3">
							</label>							
						</div>


						<div class="form-group market-stat">
							<label for="" class="sub-headline">8.3. Others </label>		
							<div class="clearfix"></div>					
							<textarea name="" id="" cols="20" rows="2" class="form-control" placeholder="others"></textarea>
														
						</div>
						<div class="clearfix"></div>

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