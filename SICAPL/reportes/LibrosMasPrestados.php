<?php

        require '../fpdf/fpdf.php';
        class PDF extends FPDF{
            function Header() {
                date_default_timezone_set('America/El_Salvador');
                $this->image('../imagenes/casa.png',250,6,30);
                $this->SetFont('Arial','B',15);
                 
                 $this->Cell(75);
                $this->Cell(120,5,'Casa de Encuentro Juvenil Verapaz, San Vicente');
                $this->Ln(2); 
                $this->Cell(100);
                $this->Cell(120,15,utf8_decode('Libros Dañados'));
                $this->Cell(-135);
                $this->SetFont('Arial','',  10);
                $this->Cell(15,30,'Fecha: '.date('d-m-Y'));
                $this->Cell(50);
                 $this->Cell(15,30,'Hora: '.date('H:i'));
                $this->image('../imagenes/logoReporte.png',5,5,30);
                $this->Ln(25);        
            }
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
               
            }
            
            
        }

        include  '../app/Conexion.php';
        include  '../modelos/Activo.php';
        include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_libros::LibrosMasPrestados(Conexion::obtener_conexion());
       
        
        
        $pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20);
$pdf->Cell(80, 6, utf8_decode('Código de Libro'), 1, 0, 'C');
$pdf->Cell(80, 6, utf8_decode('Título'), 1, 0, 'C');
//$pdf->Cell(50, 6, 'Motivo', 1, 0, 'C');
$pdf->Cell(80, 6, utf8_decode('Veces Prestado'), 1, 0, 'C');
$pdf->SetFont('Arial','',  10);
foreach ($listado1 as $fila1) {
    $pdf->Ln(6); 
    $pdf->Cell(20);
    $pdf->Cell(80, 6, $fila1['cl'], 1, 0, 'C');
    $pdf->Cell(80, 6, utf8_decode($fila1['titulo']), 1, 0, 'C');
    //$pdf->Cell(10, 6, utf8_decode($fila1['motivo']), 1, 0, 'C');
    $pdf->Cell(80, 6, ($fila1['veces']), 1, 0, 'C');
}

$pdf->Output();

?>