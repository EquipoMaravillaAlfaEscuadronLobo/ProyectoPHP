<?php

include  '../app/Conexion.php';
include  '../modelos/Activo.php';
include  '../repositorios/repositorio_activo.php';
include  'plantilla.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_activo::lista_activo_inventario(Conexion::obtener_conexion());

$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(60, 6, 'Codigo', 1, 0, 'C');
$pdf->Cell(30, 6, 'Tipo', 1, 0, 'C');
$pdf->Cell(60, 6, 'Encargado', 1, 0, 'C');
$pdf->Cell(15, 6, 'Precio', 1, 0, 'C');
$pdf->Cell(40, 6, 'fecha adquisicion', 1, 0, 'C');
$pdf->Cell(50, 6, 'Proveedor', 1, 0, 'C');
$pdf->Cell(20, 6, 'Estado', 1, 0, 'C');
$pdf->SetFont('Arial','',  10);


//while ($fila1 = $listado1->fetch_assoc()){
//    $pdf->Cell(60, 6, $fila1['cod'], 1, 0, 'C');
//    $pdf->Cell(30, 6, $fila1['tipo'], 1, 0, 'C');
//    $pdf->Cell(60, 6, 'Encargado', 1, 0, 'C');
//    $pdf->Cell(15, 6, 'Precio', 1, 0, 'C');
//    $pdf->Cell(40, 6, 'fecha adquisicion', 1, 0, 'C');
//    $pdf->Cell(50, 6, 'Proveedor', 1, 0, 'C');
//    $pdf->Cell(20, 6, 'Estado', 1, 0, 'C');
//}
//
foreach ($listado1 as $fila1) {
    $pdf->Ln(6); 

    $pdf->Cell(60, 6, $fila1['cod'], 1, 0, 'C');
    $pdf->Cell(30, 6, $fila1['tipo'], 1, 0, 'C');
    $pdf->Cell(60, 6, 'Encargado', 1, 0, 'C');
    $pdf->Cell(15, 6, 'Precio', 1, 0, 'C');
    $pdf->Cell(40, 6, 'fecha adquisicion', 1, 0, 'C');
    $pdf->Cell(50, 6, 'Proveedor', 1, 0, 'C');
    $pdf->Cell(20, 6, 'Estado', 1, 0, 'C');
}


$pdf->Output();
?>