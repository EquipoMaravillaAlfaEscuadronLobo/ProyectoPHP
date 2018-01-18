<?php

include  '../app/Conexion.php';
include  '../modelos/Activo.php';
include  '../repositorios/repositorio_activo.php';
include  'plantilla_4.php';
$cod=$_POST['ver_cod_depre'];
$fech=$_POST['ver_fecha_depre'];
$val=$_POST['ver_valor'];

$anio=$_POST['ani'];
$anio1=$_POST['ani2'];

$va=$_POST['v'];
$va2=$_POST['v2'];

$d=$_POST['d'];
$d1=$_POST['d2'];

$vn=$_POST['vn'];
$vn1=$_POST['vn2'];

Conexion::abrir_conexion();
$listado1 = Repositorio_activo::lista_activo_inventario(Conexion::obtener_conexion(), "3");
$estado="";
$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40);
$pdf->Cell(45, 6, 'Codigo');
$pdf->Cell(45, 6, $cod);
$pdf->Cell(20);
$pdf->Cell(45, 6, 'fecha adquisicion');
$pdf->Cell(45, 6, $fech);
$pdf->Ln(6);
$pdf->Cell(150);
$pdf->Cell(45, 6, 'Valor');
$pdf->Cell(45, 6, $va.' $');
$pdf->Ln(10);
$pdf->Cell(40);
$pdf->Cell(35, 6, utf8_decode('Año'), 1, 0, 'C');
$pdf->Cell(60, 6, $val, 1, 0, 'C');
$pdf->Cell(40, 6, utf8_decode('Depreciación'), 1, 0, 'C');
$pdf->Cell(40, 6, 'Valor Neto', 1, 0, 'C');
$pdf->SetFont('Arial','',  10);
$pdf->Ln(6);
$pdf->Cell(40);
$pdf->Cell(35, 6, $anio, 1, 0, 'C');
$pdf->Cell(60, 6, $va, 1, 0, 'C');
$pdf->Cell(40, 6, $d1, 1, 0, 'C');
$pdf->Cell(40, 6, $vn, 1, 0, 'C');
$pdf->SetFont('Arial','',  10);
$pdf->Ln(6);
$pdf->Cell(40);
$pdf->Cell(35, 6, $anio1, 1, 0, 'C');
$pdf->Cell(60, 6, $va2, 1, 0, 'C');
$pdf->Cell(40, 6, $d, 1, 0, 'C');
$pdf->Cell(40, 6, $vn1, 1, 0, 'C');
$pdf->SetFont('Arial','',  10);


$pdf->Output();
?>