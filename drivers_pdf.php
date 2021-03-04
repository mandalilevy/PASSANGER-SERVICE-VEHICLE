<?php
require('fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vehicle');

$query=mysqli_query($con,"select * from driver");
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
$pdf->Cell(59	,5,'ALL DRIVERS REPORT',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

//$pdf->Cell(130	,5,'[did]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(50	,5,'NAME',1,0);
$pdf->Cell(50	,5,'LICENCE NUMBER',1,0);
$pdf->Cell(55	,5,'GENDER',1,1);

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query=mysqli_query($con,"select * from driver");

while($item=mysqli_fetch_array($query)){
	$pdf->Cell(50,5,$item['driver_name'],1,0);
	$pdf->Cell(50,5,$item['driver_licenceno'],1,0);
	$pdf->Cell(55,5,$item['driver_gender'],1,1);


}
$pdf->Output();
?>
