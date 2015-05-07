<?php
class Customerslibrary
{
	public $db;
	public $golink;
	public $gogloballink;
	public $goshowlink;
	public $gouplink;
	
	function __construct($dbname)
	{
                $aa="http://localhost/E-commerce/";
				$bb="C:\\xampp\\htdocs\\E-commerce\\";
		
		$this->db=new MySQLi("localhost","root","","$dbname");
		$this->golink="$aa"."private/SuccessInsert.php";
		$this->goshowlink="$aa"."private/CustomersShow.php";
		$this->goshowlinkall="$aa"."private/";
		$this->gogloballink="$aa";
		
		$this->gouplink="$bb"."private";
	}
}
?>