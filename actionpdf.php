<?php
session_start();
?>
<?php
 //include_once("billnew13.php");
require('WriteHTML.php');
$product=array();
$quantity=array();
$a=array();
$price=array();
$product=$_SESSION['product'];
	 $quantity=$_SESSION['quantity'];
     $price=$_SESSION['price'];
	 $a=$_SESSION['amount'];


$htmlTable=array();

$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();

$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1>HAJA TRENDS SUPERMARKET</h1><br>
</para><center>              BILL!!            </center>');
$pdf->WriteHTML('<br>-----------------------------------------------------------------------------');
$pdf->SetFont('Arial','B',7); 
$pdf->SetFont('Arial','B',14); 

$pdf->WriteHTML('<br>product          quantity            price             amount');
$pdf->SetFont('Arial','B',7); 

for($i=1;$i<=20;$i++)
{
if($product[$i])

{
$htmlTable[$i]='<TABLE>
<TR>
<TD>'.$product[$i].'</TD>
<TD>'.$quantity[$i].'</TD>
<TD>'.$price[$i].'</TD>
<TD>'.$a[$i].'</TD>
</TR>
</TABLE>';
}
}

for($i=1;$i<=20;$i++)
{
if($product[$i])
{
$pdf->WriteHTML2("$htmlTable[$i]");
$pdf->SetFont('Arial','B',6);
}
}
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<br>-----------------------------------------------------------------------------');
$pdf->SetFont('Arial','B',7); 


//for($i=1;$i<=20;$i++)
//{
//if($product[$i])
//{
//$htmlTable1='<para>'.$product[$i].'            '.$quantity[$i].'         '.$price[$i].'         '.$a[$i].'</para>';
//$pdf->WriteHTML2("$htmlTable1");
//$pdf->SetFont('Arial','B',14);
//}
//}



$pdf->Output(); 

?>