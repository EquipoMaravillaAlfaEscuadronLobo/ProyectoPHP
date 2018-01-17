<?php
require('../fpdf/fpdf.php');
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../imagenes/logo.png',10,8,28,20,'PNG');
$pdf->Cell(40,10,'');
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();

Conexion::abrir_conexion();
$listado1 = Repositorio_libros::CodigoBarras(Conexion::obtener_conexion());
?>
