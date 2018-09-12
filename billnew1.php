<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php include_once("db.php");
	session_start();
?>

<?php 
 	for($i=1;$i<=10;$i++)
    {
     $pr="p".$i;
     $qu="q".$i;
	${"proid".$i}=$_POST[$pr];
	${"quantity".$i}=$_POST[$qu];
	}
	//$_SESSION['p1']=$proid1;
	//$quantity1=$_POST['q1'];
	//$_SESSION['q1']=$quantity1;

	//$id1=$_POST['id'];
	//$proid2=$_POST['p2'];
	//$quantity2=$_POST['q2'];
$product=array();
$quantity=array();
for($i=1;$i<=10;$i++)
{
$product[$i]=${"proid".$i};
$quantity[$i]=${"quantity".$i};
}
$_SESSION['product']=$product;
$_SESSION['quantity']=$quantity;
    
 for($i=1;$i<=10;$i++)
{	
   $sql="SELECT * FROM stock WHERE(prodid='$product[$i]')";
 //$sql="SELECT * FROM product WHERE(proid='$i')";


 

	#SELECT count(*) FROM phplogin WHERE(username='$uname' and password='$pass');
	$qury=mysql_query($sql);
	//$i=1;
	while($result=mysql_fetch_array($qury))
	{ 
	 
		$s=$result['quantity'];
		
	}
	    //echo "$s";
		$mod=$s+$quantity[$i];
		//echo "$mod";
		$pid=$product[$i];
		$sql1="UPDATE stock SET quantity='$mod' WHERE(prodid='$product[$i]')";
    $qury=mysql_query($sql1);
}	
echo "Stocks are added successfully!!";

?>
<div style="float:right";><a href="stock.php?page=empty">BACK</a></div>
</body>

</html>
