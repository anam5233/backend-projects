<?php
class library
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
		$this->goshowlink="$aa"."private/ShowAdmin.php";
		$this->goshowlinkall="$aa"."private/";
		$this->gogloballink="$aa";
		
		$this->gouplink="$bb"."private";
	}
	function DoubleField_Verification($tablename,$fieldname1,$fieldvalue1,$fieldname2,$fieldvalue2)
	{
		$result="Not Exists";
		$mysqli=$this->db;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		$query="select * from $tablename where $fieldname1='$fieldvalue1' and $fieldname2='$fieldvalue2'";
		//echo $query;
		$r=$mysqli->query($query);
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result="Exist";
		
			
		}
		return $result;
	}
	function exists($tablename,$fieldname,$fieldvalue)
	{
		$result="Not Exists";
		$mysqli=$this->db;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		$query="select * from $tablename where $fieldname='$fieldvalue'";
		$r=$mysqli->query($query);
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result="Exist";
		}
		return $result;
	}
	function showsingledata($tablename,$fieldname)
	{
		$result=array();
		$mysqli=$this->db;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		$query="select distinct $fieldname from $tablename  order by $fieldname";
		$r=$mysqli->query($query);
		$ind=0;
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result[$ind]=$row[0];
			$ind+=1;
		}
		//print_r($result);
		return $result;
	}
	function showsingledata_by_one_field($tablename,$fieldname,$wherefield,$wherevalue)
	{
		$result=array();
		$mysqli=$this->db;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		$query="select $fieldname from $tablename where $wherefield='$wherevalue' order by $fieldname";
		$r=$mysqli->query($query);
		$ind=0;
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result[$ind]=$row[0];
			$ind+=1;
		}
		//print_r($result);
		return $result;
	}
	function showsingledatalast_n($tablename,$fieldname,$no,$orderby)
	{
		$result=array();
		$mysqli=$this->db;
		//$query="select distinct $fieldname from $tablename  order by $fieldname";
		$query="SELECT $fieldname FROM $tablename order by $orderby desc limit 0, $no";
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		//echo $query;
		$r=$mysqli->query($query);
		$ind=0;
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result[$ind]=$row[0];
			$ind+=1;
		}
		//print_r($result);
		return $result;
	}
	function showsingledatalastfrom_m_to_n($tablename,$fieldname,$no1,$no2,$orderby)
	{
		$result=array();
		$mysqli=$this->db;
		//$query="select distinct $fieldname from $tablename  order by $fieldname";
		$query="SELECT $fieldname FROM $tablename order by $orderby desc limit $no1,$no2";
		//echo $query;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		//echo $query;
		$r=$mysqli->query($query);
		$ind=0;
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result[$ind]=$row[0];
			$ind+=1;
		}
		//print_r($result);
		return $result;
	}
	function showsingledatalastfrom_m_to_n_by_where($tablename,$fieldname,$no1,$no2,$orderby,$where_field,$where_value)
	{
		$result=array();
		$mysqli=$this->db;
		//$query="select distinct $fieldname from $tablename  order by $fieldname";
		$query="SELECT $fieldname FROM $tablename where $where_field='$where_value' order by $orderby desc limit $no1,$no2";
		//echo $query;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		//echo $query;
		$r=$mysqli->query($query);
		$ind=0;
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result[$ind]=$row[0];
			$ind+=1;
		}
		//print_r($result);
		return $result;
	}
	function showsingledatalast_n_random($tablename,$fieldname,$no,$orderby)
	{
		$result1=array();
		$result=array();
		$mysqli=$this->db;
		//$query="select distinct $fieldname from $tablename  order by $fieldname";
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		$query="SELECT $fieldname FROM $tablename order by $orderby asc";
		//echo $query;
		$r=$mysqli->query($query);
		$ind=0;
		//echo "$query<br>";
		//if($r->affected_rows>=$no)
		//{
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$ind+=1;
			$result[$ind]=$row[0];
			
		}
		//}
		$arr=count($result);
		for($ii=0;$ii<$arr;$ii++)
			{
		$result1[$ii]=$result[mt_rand(1,$ind)];
		}
		//print_r($result);
		return $result1;
	}
	
	
	function searchsingledata($tablename,$wherefieldname,$wherefieldvalue,$searchfield)
	{
		$result="Not Exists";
		$mysqli=$this->db;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		$query="select $searchfield from $tablename where $wherefieldname='$wherefieldvalue'";
		$r=$mysqli->query($query);
		while($row=$r->fetch_array(MYSQLI_NUM))
		{
			$result=$row[0];
		}
		$r->free();
		return $result;
		
	}
	function get_item_info_by_icode($icode)
	{
		$result1="<div style=\"text-align:center\"><table width=80% align=\"center\">";
		$mysqli=$this->db;
		$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
		$selectQuery = 'SELECT * FROM itemsentry WHERE itemcode="'.$icode.'"';
		//echo $selectQuery;
		$r = $mysqli->query($selectQuery);
		//echo $result;
			
				while($result=$r->fetch_array(MYSQLI_NUM))
					{
						$result1.="<tr><td align=right>Item Code:</td><td>$result[0]</td></tr>";
						$result1.="<tr><td align=right>Item Name:</td><td>$result[1]</td></tr>";
						$result1.="<tr><td align=right>Group Name:</td><td>$result[2]</td></tr>";
						$result1.="<tr><td align=right>Price:</td><td>$result[4]</td></tr>";
						$result1.="<tr><td align=right>Stock:</td><td>$result[5]</td></tr>";
						$result1.="<tr><td align=right>Picture:</td><td><img src=\"Inputs/upload files by ajax/Picture/$result[9]\" width=\"200px\" Height=\"200px\"></td></tr>";
					
					}
	
			
			$result1.="</table></div>";
			//echo $result;
			$r->free();
			return $result1;			

		
	}
}

?>