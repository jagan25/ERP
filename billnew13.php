<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style>
		a:link {text-color:black;text-decoration:none;}  
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;font-size:150%;background:#66ff66;}   
a:active {color:fuchsia;text-decoration:underline;}
		
			.menu
			 {
			position: absolute;
			top: 20%;
			left: 30%;
			padding: 50px;
			margin: 10px;
			background-color: white;
		 background-repeat:repeat;
		 			font-weight: bold;
			font-variant: small-caps;
			color: #000000;
			//border-bottom-color: #FF0000;
		}
}
body{
			/*<?php 
		#$url='C:\xampp\htdocs\proj\PROJIMAGE.jpg';
		?>
*/

	/*background-image:url('<?php echo $url; ?>');*/
		background-image:url('case_proj1.jpg');
		background-attachment:fixed;
		font-family:Verdana;
	
		}

		</style>
     
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
	 $product=array();
	 $quantity=array();
	 $product=$_SESSION['product'];
	 $quantity=$_SESSION['quantity'];
     $price=$_SESSION['price'];
	 $a=$_SESSION['amount'];
	 $date=$_SESSION['date'];
for($i=1;$i<=20;$i++)
{
if($product[$i])
{
echo "<tr>";
echo "<td>" . $product[$i]. "</td>";
	     echo "<td>" . $quantity[$i] . "</td>";
	    echo "<td>". $price[$i] . "</td>";
	    echo "<td>". $a[$i] . "</td>";
	    echo "</tr>";
	    }
}
echo "</table>";
$r=$_POST['pay'];
echo "amount paid=".$r;
echo "<br/>";
$f1=$_SESSION['t'];
$return=$f1-$r;
echo "amount returned=".$return;
echo "<br/>";
 include_once("db.php") ;
 $date=$_SESSION['date'];
 for($i=1;$i<=20;$i++)
{	$sql="SELECT * FROM stock WHERE(prodid='$product[$i]')";
 //$sql="SELECT * FROM product WHERE(proid='$i')";


 

	#SELECT count(*) FROM phplogin WHERE(username='$uname' and password='$pass');
	$qury=mysql_query($sql);
	//$i=1;
	while($result=mysql_fetch_array($qury))
	{ 
	 
		$s=$result['quantity'];
		
	}
	    //echo "$s";
		$mod=$s-$quantity[$i];
		//echo "$mod";
		$pid=$product[$i];
		$sql1="UPDATE stock SET quantity='$mod' WHERE(prodid='$product[$i]')";
    $qury=mysql_query($sql1);
	$sql2="INSERT into date values('".$date."',".$product[$i].",".$quantity[$i].")";
	$qury=mysql_query($sql2);
	
}

//echo "amount paid=".$_SESSION['t'];
?>
</body>

<div style="float:right";><a href="billing3.php">Put Another Bill</a></div><br/>
<div style="float:right";><a href="actionpdf.php">Print Bill</a></div><br/>
</html>
