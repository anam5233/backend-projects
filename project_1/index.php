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
			<h2>Lorem ipsum dolor sit amet.</h2>
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
					<input type="submit" value="submit">
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
					echo "<p class=\"error\">your first name input field is empty</p>";
				}
				else{	
					if ($result) : ?> 
					<p>Added a record for <?php echo ($firstName); ?> the singer.</p> 
					<a href="result.php">Now go see your new record in action.</a>

					<?php endif; 
					echo "<p class=\"success\">your first name is ". $f_name. "</p>";
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