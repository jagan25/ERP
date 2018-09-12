<?php 
for($i=1; $i<=2; $i++)
{
$s="text".$i;
${"s".$i}=$_POST[$s];
}
echo "$s1";
?>