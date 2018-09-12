<?php include_once("db.php") ; ?>
<?php
	$uname=$_POST['name1'];
	$pass=$_POST['pwd1'];
	

	$sql="DELETE from members WHERE (password='$pass')";
    
    	#SELECT count(*) FROM phplogin WHERE(username='$uname' and password='$pass');
	$qury=mysql_query($sql);
	
	if(!$qury)
	{
		echo "Failed".mysql_error();
		echo "<br>Retry !!!";
		echo "<br><a href='remove.php'> Try again</a>";
	}
	else
	{
		echo "Succesfull";
		
		echo "<br><a href='remove.php'>Remove another user</a>";
		
	}
?>
<html>
	<head>
		<style type="text/css">
 .topcorner{
   position:absolute;
   top:0;
   right:0;
  }
  
</style>
	</head>
	<body>
		<div class="topcorner"><a href="register1.php">Back to My workspace</a></div>
	</body>
</html>
