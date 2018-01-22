<?php

include  '../app/Conexion.php';
include  '../modelos/Activo.php';
include  '../repositorios/repositorio_activo.php';
include  'plantilla_5.php';
//recuperando datos de mantnimiento
$dec=$_POST['ver_descrMant'];// descripcion del manenimiento
$fech=$_POST['ver_fecha_mant'];// fecha del manenimiento
$val=$_POST['ver_costoTotal'];// val del manenimiento
// recuperando datos de los encargados
$nombre=$_POST['nombre'];
$tel=$_POST['tel'];
$dir=$_POST['dir'];
$co=$_POST['co'];
$longitud = count($nombre);
// recuerando datos de activos
$cod=$_POST['cod'];
$tipo=$_POST['tipo'];
$longitudA = count($cod);

$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40);
$pdf->Cell(55, 6, 'Fecha de Mantenimiento:');
$pdf->Cell(45, 6, $fech);
$pdf->Cell(20);
$pdf->Cell(45, 6, 'Precio Total:');
$pdf->Cell(45, 6, $val.' $');
$pdf->Ln(10);
$pdf->Cell(40);
$pdf->Cell(45, 6, utf8_decode('Descripción:'));
$pdf->Cell(100, 6, $dec);
//encabezado para tabla encagado
$pdf->Ln(15);
$pdf->Cell(5);
$pdf->Cell(70, 6, "Encagados", 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(25);
$pdf->Cell(70, 6, "Nombre", 1, 0, 'C');
$pdf->Cell(35, 6, utf8_decode('Teléfono'), 1, 0, 'C');
$pdf->Cell(80, 6, utf8_decode('Dirección'), 1, 0, 'C');
$pdf->Cell(40, 6, 'Correo', 1, 0, 'C');
$pdf->SetFont('Arial','',  10);

//llenando tabla de encargados
for ($i = 0; $i < $longitud; $i++) {
$pdf->Ln(6);
$pdf->Cell(25);
$pdf->Cell(70, 6, $nombre, 1, 0, 'C');
$pdf->Cell(35, 6, $tel, 1, 0, 'C');
$pdf->Cell(80, 6, $dir, 1, 0, 'C');
$pdf->Cell(40, 6, $co, 1, 0, 'C');
}

//encabezado para tabla encagado
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(15);
$pdf->Cell(5);
$pdf->Cell(70, 6, "Activos", 0, 0, 'C');
$pdf->Ln(8);
$pdf->Cell(25);
$pdf->Cell(105, 6, "Codigo", 1, 0, 'C');
$pdf->Cell(70, 6, utf8_decode('Tipo'), 1, 0, 'C');
$pdf->SetFont('Arial','',  10);
//llenando tabla de activos
for ($i = 0; $i < $longitudA; $i++) {
$pdf->Ln(6);
$pdf->Cell(25);
$pdf->Cell(105, 6, $cod, 1, 0, 'C');
$pdf->Cell(70, 6, $tipo, 1, 0, 'C');
}

$pdf->Output();
?>