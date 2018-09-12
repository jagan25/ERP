<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php include_once("db.php") ;

	session_start();
?>
<div id="bil">
<?php

for($i=1;$i<=4;$i++)
{

$pr="p".$i;
$qu="q".$i;
	${"proid".$i}=$_POST[$pr];
	${"quantity".$i}=$_POST[$qu];
	}
	$product=array();
$quantity=array();
for($i=1;$i<=4;$i++)
{
$product[$i]=${"proid".$i};
$quantity[$i]=${"quantity".$i};
}
$_SESSION['product']=$product;
$_SESSION['quantity']=$quantity;
?>

<form  action="actionpdfpurchase.php" method="post">
<input type="submit" value="view list" id="viewlist">






</body>

</html>
