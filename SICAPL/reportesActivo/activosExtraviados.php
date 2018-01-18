<?php

include  '../app/Conexion.php';
include  '../modelos/Activo.php';
include  '../repositorios/repositorio_activo.php';
include  'plantilla_2.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_activo::lista_activo_inventario(Conexion::obtener_conexion(), "4");
$estado="";
$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(45, 6, 'Codigo', 1, 0, 'C');
$pdf->Cell(35, 6, 'Tipo', 1, 0, 'C');
$pdf->Cell(60, 6, 'Encargado', 1, 0, 'C');
$pdf->Cell(18, 6, 'Precio', 1, 0, 'C');
$pdf->Cell(40, 6, 'fecha adquisicion', 1, 0, 'C');
$pdf->Cell(50, 6, 'Proveedor', 1, 0, 'C');
$pdf->Cell(25, 6, 'Estado', 1, 0, 'C');
$pdf->SetFont('Arial','',  10);

foreach ($listado1 as $fila1) {
    $pdf->Ln(6); 
    if($fila1['e']=="0"){
        $estado="Dado de Baja";
    }
    if($fila1['e']=="1"){
        $estado="Disponible";
    }
    if($fila1['e']=="2"){
        $estado="En Prestamo";
    }
    if($fila1['e']=="3"){
        $estado="Dañado";
    }
    if($fila1['e']=="4"){
        $estado="Extraviado";
    }
    $pdf->Cell(45, 6, $fila1['cod'], 1, 0, 'C');
    $pdf->Cell(35, 6, utf8_decode($fila1['tipo']), 1, 0, 'C');
    $pdf->Cell(60, 6, utf8_decode($fila1['admin']), 1, 0, 'C');
    $pdf->Cell(18, 6, $fila1['p'].' $', 1, 0, 'C');
    $pdf->Cell(40, 6, date_format(date_create($fila1['f']), 'd-m-Y'), 1, 0, 'C');
    $pdf->Cell(50, 6, utf8_decode($fila1['proveedor']), 1, 0, 'C');
    $pdf->Cell(25, 6, utf8_decode($estado), 1, 0, 'C');
}


$pdf->Output();
?>