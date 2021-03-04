<?php
require('fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vehicle');
session_start();
$query=mysqli_query($con,"select * from book where date='".$_POST['ticket']."' and passenger_id='".$_SESSION['passenger']."'");
$qq=mysqli_query($con,"select * from price ");
$invoice=mysqli_fetch_array($query);


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'PASSENGER SERVICE VEHICLE MANAGEMENT SYSTEM',0,0);
//$pdf->Cell(59	,5,'DRIVER ID',0,1);//end of line
$pdf->Cell(189	,10,'',0,1);//end of line
$pdf->Cell(59	,5,'TICKET',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

//$pdf->Cell(130	,5,'[did]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(50	,5,'From',1,0);
$pdf->Cell(50	,5,'To',1,0);
$pdf->Cell(55	,5,'Ticket Amount',1,1);

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$qq=mysqli_query($con,"select * from price where start='".$_POST['frm']."' and end='".$_POST['tto']."'");

while($trs=mysqli_fetch_array($qq)){
	$pdf->Cell(50,5,$trs['start'],1,0);
	$pdf->Cell(50,5,$trs['end'],1,0);
	$pdf->Cell(55,5,$trs['price'],1,1);

}

$pdf->Cell(59	,5,'',0,1);//end of line
$pdf->SetFont('Arial','B',12);

$pdf->Cell(50	,5,'PASSANGER NAME',1,0);
$pdf->Cell(55	,5,'CONTACTS',1,1);

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query=mysqli_query($con,"select * from book where date='".$_POST['ticket']."' and passenger_id='".$_SESSION['passenger']."'");

while($item=mysqli_fetch_array($query)){
	$pdf->Cell(50,5,$item['passenger_name'],1,0);
	$pdf->Cell(55,5,$item['contacts'],1,1);


}
$pdf->Output();
?>
