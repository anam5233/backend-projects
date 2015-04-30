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

		echo $f_name."<br>".
			 $md_name."<br>".
			 $l_name."<br>".
			 $email."<br>".
			 $dob."<br>".
			 $gender."<br>".
			 $address."<br>".
			 $occupation."<br>".
			 $phone."<br>".
			 $fax."<br>".
			 $district."<br>".
			 $post_code."<br>".
			 $country."<br>".
			 $login_name."<br>".
			 $password."<br>";

	}
	else{
		echo "something went wrong" ;
	}

?>