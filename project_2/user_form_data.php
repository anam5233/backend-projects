<?php 
include "demo_connect_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>title</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	
</head>
<body>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$f_name = $_POST['f_name'];
		$md_name = $_POST['md_name'];
		$l_name = $_POST['l_name'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$occupation = $_POST['occupation'];
		$phone = $_POST['phone'];
		$fax = $_POST['fax'];
		$district = $_POST['district'];
		$post_code = $_POST['post_code'];
		$country = $_POST['country'];
		$login_name = $_POST['login_name'];
		$password = md5($_POST['password']);



	}
	else{
		echo "something went wrong" ;
	}

?>




	<header>
		<div class="container">
			<div class="row">
				<h1>Please check the Information your entered</h1>
				<div class="user_name">
					<span>user name :</span>
					<span><?php echo $login_name; ?></span>
				</div>
			</div>
			<!-- end of the /.row -->
		</div>
		<!-- end of the /.container -->
	</header>
<!-- end of the header -->



<footer>
	<div class="container">
		<div class="row">
			<a href="user_reg.php" class="btn btn-info">Edit</a>
			<?php 

$check_user_name = mysqli_query($myconnection, "SELECT * FROM demo_table_one WHERE user_name = '".$login_name."'");
if (mysqli_num_rows($check_user_name) == 1) {
	include "404.php";
}
else{

$result = mysqli_query($myconnection, "INSERT INTO demo_table_one (id, f_name, md_name, l_name, email, dob, gender, address, occupation, phone, fax, district, post_code, country, user_name, password)
VALUES  
('','$f_name', '$md_name', '$l_name','$email','$dob','$gender','$address','$occupation','$phone','$fax','$district','$post_code','$country','$login_name', '$password')");


if ($result) :?>

<section class="my_form_data_table">
	<div class="container">
		<div class="row">
			<table class="table table-bordered">
				<tr>
					<td>first name : <?php echo $f_name ;?></td>
					<td>middle name : <?php echo $md_name ; ?></td>
					<td>last name : <?php echo $l_name ;?></td>
				</tr>
				<tr>
					<td>email : <?php echo $email ;?></td>
					<td>DOB : <?php echo $dob ; ?></td>
					<td>Gender : <?php echo $gender ;?></td>
				</tr>
				<tr>
					<td colspan="3">address : <?php echo $address ;?></td>					
				</tr>
				<tr>
					<td>occupation : <?php echo $occupation ;?></td>
					<td>phone : <?php echo $phone ; ?></td>
					<td>fax : <?php echo $fax ;?></td>
				</tr>
				<tr>
					<td>Zip code : <?php echo $district ;?></td>
					<td>District : <?php echo $post_code ; ?></td>
					<td>Country : <?php echo $country ;?></td>
				</tr>
			</table>
			<!-- end of the /.table -->
		</div>
		<!-- end of the /.row -->
	</div>
	<!-- end of the /.container -->
</section>
<!-- end of the section/.my_form_data_table -->

<?php endif ?>


<?php

	// {
	// 	echo "added a recode successfully";
	// 	echo $result;
	// }
	// else{
	// 	echo "something went wrong";
	// }
}

?>
			<a href="user_reg_two.php" onclick="myAlert()"  id="next" class="btn btn-danger">Next</a>
		</div>
	</div>
</footer>

<script type="text/javascript">
		// var anchor = document.getElementById('next');
		// anchor.addEventListener("click", myJsDemoFunction );
		// function myJsDemoFunction(){
			
		// 	alert("data added to the database");
		// }
function myAlert(){

	alert('alert message goes here');
}

		// var anchor = document.getElementById('anchor');
        // or anchor = getElementsByTagName('a') then do ('a')[0]

        // anchor.addEventListener('click', doSomething, false);

        // function doSomething() {
            // alert('clicked');
        // }
</script>
	

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>
	
	<!-- // <script src="js/myscript.js"></script> -->
</body>
</html>
