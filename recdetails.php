<html>
<body bgcolor="pink">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("case", $con);
$job1= "INSERT INTO pet(id,age,type) values('$_POST[idd]','$_POST[ag]','$_POST[typ]')";
if (!mysql_query($job1,$con))
{
die('Error: ' . mysql_error());
}


echo "1 record added";

//mysql_close($con)

//$con1=mysqli_connect("localhost","root","","nancydb") or die(mysql_error());
$email =  mysql_query( "select * from register ",$con) or die("invalid type");
/*if(! mysql_query( "select * from register ",$con) )
{
die("invalid type");
}*/

while($email1= mysql_fetch_array($email))
{

		$mail=$email1['email'];
		//$movie=$email1['name'];
     //$rs=mysql_query("select username,password from customer where email='$email'",$con) or die("invalid username");
     
         $to = $mail;
         		
		//Testing the mail functino
		
		require_once "Mail.php";

		$from = 'jagan2595@in.com';
		
		$subject = 'An order is given';
		$body = " Deliver the given items";

		$headers = array(
			'From' => $from,
			'To' => $to,
			'Subject' => $subject
		);

		$smtp = Mail::factory('smtp', array(
				'host' => 'ssl://smtp.gmail.com',
				'port' => '465',
				'auth' => true,
				'username' => 'jagan2595@gmail.com',
				'password' => 'jagan2595'
			));

		$mail = $smtp->send($to, $headers, $body);

		if (PEAR::isError($mail)) {
			echo('<p>' . $mail->getMessage() . '</p>');
		} else {
			//echo('<p>Message successfully sent!</p>');
		}
 }mysql_close($con);  
/*if($res)
{
	header("location:success.html");
}
else
{
	header("location:fail.html");
}*/

?>