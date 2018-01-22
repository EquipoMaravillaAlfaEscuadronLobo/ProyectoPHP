<?php

include  '../app/Conexion.php';
include  '../modelos/Activo.php';
include  '../repositorios/repositorio_activo.php';
include  'plantilla_3.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_activo::lista_activo_mas(Conexion::obtener_conexion(), "4");
$estado="";
$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(56);
$pdf->Cell(70, 6, 'Codigo', 1, 0, 'C');
$pdf->Cell(60, 6, 'Tipo', 1, 0, 'C');
$pdf->Cell(40, 6, 'Veces Prestados', 1, 0, 'C');
$pdf->SetFont('Arial','',  10);

foreach ($listado1 as $fila1) {
    $pdf->Ln(6); 
    $pdf->Cell(56);
    $pdf->Cell(70, 6, $fila1['cod'], 1, 0, 'C');
    $pdf->Cell(60, 6, utf8_decode($fila1['tipo']), 1, 0, 'C');
    $pdf->Cell(40, 6, utf8_decode($fila1['veces']), 1, 0, 'C');
}


$pdf->Output();
?>