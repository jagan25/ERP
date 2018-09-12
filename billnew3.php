<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PAYMENT</title>
<style>
body{
	background-color:#ffffd1;
}
table#t01 tr:nth-child(even){
	background-color:#eee;
}
table#t01 tr:nth-child(odd){
	
	background-color:#fff;
}
table#t01 th{
	
	background-color:black;
	color:white;
}
</style>
<?php include_once("db.php") ;

	session_start();
?>
<div id="bil">
<?php
//$i=1;
  $date=$_POST['date'];
  $_SESSION['date']=$date;
  
for($i=1;$i<=20;$i++)
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
$a=array();
$quantity=array();
$price=array();
for($i=1;$i<=20;$i++)
{
$product[$i]=${"proid".$i};
$quantity[$i]=${"quantity".$i};
}
$_SESSION['product']=$product;
$_SESSION['quantity']=$quantity;

	//$sql="SELECT count(*) FROM product WHERE(prodid='".$uname."' and password='".$pass."' and id='".$id1."')";
	 echo "<table id='t01' border='2' bgcolor='blue' cellspacing='2' cellpadding='2'>
	 <tr><td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;product_id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
<td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
<td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
<td><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
	 </tr>";
	 $total= 0;
for($i=1;$i<=20;$i++)
{	$sql="SELECT * FROM product WHERE(prodid='$product[$i]')";
	$qury=mysql_query($sql);
	while($result=mysql_fetch_array($qury))
	{
	echo "<tr>";
	    echo "<td>" . $product[$i]. "</td>";
	     echo "<td>" . $quantity[$i] . "</td>";
	   $price[$i]= $result['price']; 
		echo "<td>" . $price[$i] . "</td>";
		 
		  $a[$i]= $quantity[$i] * $result['price'];
echo "<td>" . $a[$i]. "</td>";
$total = $total + $a[$i];
		echo "</tr>";
		 

		 
	}
	
	
}
echo "</table>";
$_SESSION['price']=$price;
$_SESSION['amount']=$a;
//	$sql="SELECT * FROM product WHERE(prodid='$proid2')";




	#SELECT count(*) FROM phplogin WHERE(username='$uname' and password='$pass');
//	$qury=mysql_query($sql);
//	$i=2;
//	while($result=mysql_fetch_array($qury))
//	{ 
	// echo "<td>" . $proid2 . "</td>";
 //echo "<td>" . $quantity2 . "</td>";

	//	echo "<td>" . $result['price'] . "</td>";
		
	//	$a2= ${"quantity".$i} * $result['price'];

	//	echo "<td>" . $a2 . "</td>";


	//	echo "</tr>";
		 
		 
	//}
	//echo "</table>";
	
	//$i=1;
	//for( $i=1 ; $i<=20 ; $i++ )
	 //{
	  //if( ${"a".$i})
	  //{
	   //$total = $total + ${"a".$i};
	  //}
	  //}
	  //echo "total=".$total;
	 // $a[3]=1000;
	 // while( $a[$i] )
	  //{
	   // $total = $total + $a[$i];
	    //$i=$i+1;
     //}
     $_SESSION['t']=$total;
     echo "total=".$total;
     
//	$sql1="SELECT count(*) FROM product";
//	$qury1=mysql_query($sql1);
//		$result=mysql_fetch_array($qury);
		
//echo $result;
echo "<br/>";


 ?>   
		
</div>
<script>
function change()
{
 var tot;
 tot="<?php echo $total;?>"
 var amt=document.getElementById(p).value-tot;
 document.getElementById(forms).innerHTML=document.writeln("amount paid:" +tot);
  document.getElementById(p).innerHTML=document.writeln("amount returned:" +amt);
 document.getElementById(forms).innerHTML=document.writeln("THANKS FOR SHOPPING WITH US !!!");
 }
</script>

</head>


<body>
<div id="forms" >
<form  action="billnew13.php" method="post">


AMOUNT:<input type="text" name="pay" placeholder="enter the amount given" >

<input type="submit" value="PAY" id="pay">


</form></div>
</body>

</html>
