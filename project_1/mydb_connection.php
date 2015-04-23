<?php 
session_start();


$server = "localhost";
$dbname = "my_demo";
$user = "root";
$pass = "";

$myconnection = mysqli_connect($server, $user, $pass, $dbname) ;

if(!$myconnection){
	die("mysql error : ". mysqli_connect_error());
}

// $mydatabse = mysqli_select_db($myconnection, $dbname);

// if(!$mydatabse){
// 	echo "database connection error". mysqli_error();
// }



?>

