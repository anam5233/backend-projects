<?php
include "mydb_connection.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

<header>
	<div class="container">
		<div class="row">
			<?php 
				$result = mysqli_query($myconnection, "SELECT * FROM demo_book");
				if ($result) :
			?>
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Occupation</th>
			</tr>
		
	<?php endif ?>

	<?php 
		while ($row = mysqli_fetch_object($result)): 
	?>
		<tr>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->f_name ?></td>
			<td><?php echo $row->l_name ?></td>
			<td><?php echo $row->occupation ?></td>
		</tr>
			<?php endwhile ?>
			 </table>
		</div>
		<!-- end of the /.row -->
	</div>
	<!-- end of the /.container -->
</header>
<!-- end of the header -->

<footer>
	<div class="container">
		<div class="row">
			<a href="index.php" class="btn btn-default">back</a>
		</div>
	</div>
</footer>
	


	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>


</body>
</html>




