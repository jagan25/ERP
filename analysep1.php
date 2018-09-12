<html><head><title></title>
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=800,right=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
<?php
session_start();
?>
<?php $color=$_POST['color'];
?>
<style>
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}
li
{
float:left;
}
a:link,a:visited
{
display:block;
width:150px;
font-weight:bold;
color:black;
/*background-color:#98bf21;*/
background-color:white;
text-align:center;
padding:15px;
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active
{
background-color:#7A991A;
}
body{
	background-image:url('theatreback2.jpg');
	background-attachment:fixed;
	background-color:<?php echo $color ?>;
	background-position:cover;
	background-repeat:no_repeat;
}
</style>
</head>
<body><?php include("db.php") ;
?>
<?php
$categ=$_POST['categ'];

//echo "$categ";
 	$sql="SELECT SUM(quantity) FROM case3 group by p_name";
	$qury=mysql_query($sql);
	$num_rows = mysql_num_rows($qury);
    //echo "$num_rows Rows \n";
    //echo "<br/>";
    $_SESSION["rows"] = $num_rows;
	$i=1;
	//$sql="SELECT prod_name,quantity FROM stock";
	//$qury=mysql_query($sql);
//$row = mysql_fetch_row($qury); 
//while($row = mysql_fetch_assoc($qury))
//{
// set player data  
//$player_val_one = $row['prod_name']; 
//$player_val_two = $row['quantity']; 
//echo "$player_val_one";
//$player_val_three = $row['player_field_3']; 
// set opponent data  
//$opponent_val_one = $row['opponent_field_1']; 
//$opponent_val_two = $row['opponent_field_2']; 
//$opponent_val_three = $row['opponent_field_3'];  
//echo "{$row['quantity']}";
//echo "\t";
//echo "{$row['prod_name']}";
//echo "<br/>";
#$i=$i+1;
//}
$key = array();
$value = array();
$j = 1;
$sql="SELECT distinct p_name FROM case3";
$qury=mysql_query($sql);
while($row = mysql_fetch_assoc($qury))
{
 $key[$j] = "{$row['p_name']}";
 
 $j++;
 }
 $r=1;
 $sql="SELECT sum(quantity) as a FROM case3 group by p_name";
$qury=mysql_query($sql);
while($row = mysql_fetch_assoc($qury))
{
$value[$r] = "{$row['a']}";
 $r++;
 }

 
// print "$key[1]";
 for( $j=1 ; $j<=$num_rows ; $j++ )
  {
   print "$key[$j]";
   print "$value[$j]";
  }
  $values1 = array_combine($key, $value);
 $_SESSION["array"] = $values1;
 $sql="SELECT * FROM stock";
 $qury=mysql_query($sql);
 $num_rows = mysql_num_rows($qury);
 //echo "\n $num_rows Rows \n";
 ?>
<a href="javascript:newPopup('bar.php');">DISPLAY GRAPH</a>
<div style="float:right";><a href="stock.php?page=empty">BACK</a></div>
<div style="float:right";><a href="purchaseorder.php">purchase order</a></div>
 </body>
 </html>
