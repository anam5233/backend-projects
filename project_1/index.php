<?php
include "mydb_connection.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simple form</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">	
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<h2>Fill out below fields</h2>
		</div>
	</div>
</header>



<section class="myform">
	<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

				<div class="form-group">					
					<label for="f_name">your first name
						<input type="text" name="f_name" id="f_name" class="form-control" placeholder="write your first name" required>
					</label>
				</div>
				
				<div class="form-group">
					<label for="l_name">your last name
						<input type="text" name="l_name" id="l_name" class="form-control" placeholder="write your first name" required>
					</label>
				</div>

				<div class="form-group">
					<label for="occupation">your occupation
						<input type="text" name="occupation" id="occupation" class="form-control" placeholder="write your first name" required>
					</label>
				</div>

				<div class="form-group">
					<input type="submit" value="submit" class="btn btn-primary form-control">
				</div>
				
			</form>
			<!-- end of the form -->
		</div>

		<div class="col-lg-6">
			<?php 

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$f_name = $_POST['f_name'];
				$l_name = $_POST['l_name'];
				$occupation = $_POST['occupation'];

				$result = mysqli_query($myconnection, "INSERT INTO demo_book (f_name, l_name, occupation)
						 VALUES ('$f_name', '$l_name', '$occupation')");

				if (empty($f_name) || empty($l_name) || empty($occupation)) {
					echo "<p class=\"error\">fill out the form correctly</p>";
				}
				else{	
					if ($result) : ?> 
					<p class="success-text">Added a record to <?php echo ($firstName); ?> the database successfully.</p> 
					

					<?php endif; ?>
					<div class="form-info">
						<p class="form-data f_name">your first name is <?php echo $f_name ?></p>
						<p class="form-data l_name">your last name is <?php echo $l_name ?></p>
						<p class="form-data occupation">your occupation is <?php echo $occupation ?></p>
					</div>
					<a href="result.php" class="btn btn-default">See result</a>
					<?php 
				}

				
			}

			?>
		</div>
			


			
		</div>
	</div>
</section>





	

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>

	<!-- // <script src="js/myscript.js"></script> -->
</body>
</html>