<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
</php include("db.php");
session_start();
?>
<?php
$id=$_POST['id'];
$sql="SELECT count(*) FROM stock WHERE( prodid='".$id."')";


	#SELECT count(*) FROM phplogin WHERE(username='$uname' and password='$pass');
	$qury=mysql_query($sql);
	$result=mysql_fetch_array($qury);
	echo "$result['prod_name']";
	?>

<body>

</body>

</html>
