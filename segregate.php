<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>segregate_interfaces</title>
</head>

<body>
<?php include_once("db.php") ;

	session_start();
?>
<?php
	$uname=$_POST['username'];
	$pass1=$_POST['password1'];
	$id1=$_POST['password2'];
	$pass=$pass1.$id1;

	$sql="SELECT count(*) FROM members WHERE(username='".$uname."' and password='".$pass."')";


	#SELECT count(*) FROM phplogin WHERE(username='$uname' and password='$pass');
	$qury=mysql_query($sql);
	$result=mysql_fetch_array($qury);
	if($result[0]>0)
	{
	if($pass1=="superior")
{
header('Location: register1.php');
}
else if($pass1=="stock")
{
header('Location: stock.php?page=empty');
}
else if($pass1=="bill")
{
header('Location: billing3.php');
}
else if($pass1=="account")
{
header('Location: account.php');
}
else
{
header('Location: mainpage.php');
}


	}
	else
	{
		header('Location: signin.php');

	}
	

		
?>

</body>

</html>
