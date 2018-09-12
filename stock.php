<html>
	<head>
		<title>stock</title>	
		

		<style>
		a:link {text-color:black;text-decoration:none;}  
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;font-size:150%;background:#66ff66;}   
a:active {color:fuchsia;text-decoration:underline;}
		
			#menu
			 {
			position: absolute;
			top: 50px;
			left: 20px;
			padding: 50px;
			margin: 10px;
			background-color: white;
		 background-repeat:repeat;
		 			font-weight: bold;
			font-variant: small-caps;
			color: #000000;
			//border-bottom-color: #FF0000;
		}

			#contents
			 {
	position: absolute;
	top: 50px;
	left: 250px;
	padding: 10px;
	margin: 10px;
	background-color: #000000;
	color:white;
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

<body bgcolor="CCFF44">
<div id="menu">

<a href="stock.php?page=analyse">analyse</a><br /><hr>
<a href="stock.php?page=billingnew">enter quantity</a><br /><hr>
<a href="stock.php?page=color">color</a><br /><hr>
<a href="stock.php?page=purchaseorder">Purchase Order</a><br /><hr>


</div>
<div id="contents">
<?php
$p=$_GET['page'];
$page=$p.".php";
if(file_exists($page))
{
include($page);
}
elseif($p=="")
{
echo "this is home page";
}
else 
{
echo "wat are u lookin for";
}
?>
</div>
<div style="float:right";><a href="segregate.php">LOGOUT</a></div>
<p></p>
</body>

</html>