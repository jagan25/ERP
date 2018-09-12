<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php 
	session_start();
?>

<?php
 echo "<table border='2' bgcolor='grey' cellspacing='2' cellpadding='2'>
	 <tr><td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;product_id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
<td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
<td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
<td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
	 </tr>";
	 $product=$_SESSION['product'];
	 $quantity=$_SESSION['quantity'];
for($i=1;$i<=11;$i++)
{
if($product[$i])
{
echo "<tr>";
echo "<td>" . $product[$i]. "</td>";
	     echo "<td>" . $quantity[$i] . "</td>";
	    echo "<td>"."</td>";
	    echo "<td>"."</td>";
	    echo "</tr>";
	    }
}
echo "</table>";

echo "amount paid=".$_SESSION['t'];
?>
</body>

</html>
