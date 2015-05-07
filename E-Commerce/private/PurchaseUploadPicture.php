<?php
include("Purchaselibrary.php");
$a=new Purchaselibrary("E-commerce");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" enctype="multipart/form-data" method="post">
  <label form="classnotes">Upload Title:</label>
  <br/>
<input type="file" name="picture" value=""/> <br/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
define ("FILEREPOSITORY",$a->gouplink."\\titles\\");

if(is_uploaded_file($_FILES['picture']['tmp_name']))
{   
	echo "The file type is:".$_FILES['picture']['type']."<br>";
if($_FILES['picture']['type'] != "image/jpeg")
	{
	echo "<p>Picture File must be uploaded in jpeg format.</p>";

	}
	else
		{
			$name=$_GET['Asl'];
			$result=move_uploaded_file($_FILES['picture']['tmp_name'],
			FILEREPOSITORY.$_FILES['picture']['name']);
			
			$mysqli=$a->db;
$query="update purchase_details set Picture='".$_FILES['picture']['name']."' where asl='$name'";
echo $query;
$result1=$mysqli->query($query);


			
			
			
			if(($result==1) && ($result1==1)) header("location: ".$a->goshowlink);
			else echo"<p> There was a problem uploading the file.</p>";
			$mysqli->close();
		}
}
?>
</body>
</html>