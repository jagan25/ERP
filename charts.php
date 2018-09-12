<!DOCTYPE html>
<html>
<head>
 <style>
		a:link {text-color:black;text-decoration:none;}  
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;font-size:150%;background:#66ff66;}   
a:active {color:fuchsia;text-decoration:underline;}
		
			#menu
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
 <body bgcolor="CCFF44">
 <div id="menu">
 CHOOSE THE TYPE OF CHART:
<br>
<br>
<form name="pie" action="pie.php">
	<h1><center>
  	<input type="submit" value="Piechart"/></form>
  	<form name="linechart" action="linechart.php">
  	<input type="submit" value="Linechart"/></form>
  	<form name="pie" action="hozbarchart.php">
  	<input type="submit" value="Horizontal bar chart" /></form>
  	<form name="pie" action="vertbarchart.php">
  	<input type="submit" value="Vertical bar chart"/></form>
</center>
</h1>
</div>
</body>

</html>