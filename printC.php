<?php
require('fpdf/fpdf.php');
include('conex.php');

$pdf = new FPDF();


$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Contactos',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,8,'No.',1);
$pdf->Cell(45,8,'Primer Nombre',1);
$pdf->Cell(45,8,'Segundo Nombre',1);
$pdf->Cell(45,8,'Apellidos',1);
$pdf->Cell(45,8,'birthday',1);

$query="SELECT * FROM contactos";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10,8,$no,1);
	$pdf->Cell(45,8,$row['primerNombre'],1);
	$pdf->Cell(45,8,$row['segundoNombre'],1);
	$pdf->Cell(45,8,$row['apellidos'],1);
    $pdf->Cell(45,8,$row['birthday'],1);
}
$pdf->Output();
?>