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
                $this->Cell(120,15,utf8_decode('Listado de Libros'));
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
$listado1 = Repositorio_libros::ListaLibros(Conexion::obtener_conexion());
       
        
        
        $pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(45, 6, utf8_decode('Código'), 1, 0, 'C');
$pdf->Cell(85, 6, utf8_decode('Título'), 1, 0, 'C');
$pdf->Cell(70, 6, utf8_decode('Autor'), 1, 0, 'C');

$pdf->Cell(30, 6, utf8_decode('Editorial'), 1, 0, 'C');
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 6, utf8_decode('Fecha de Publicación'), 1, 0, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 6, utf8_decode('Cantidad'), 1, 0, 'C');
$pdf->SetFont('Arial','',  10);
foreach ($listado1 as $fila1) {
    if($fila1['estado']==0){
           $estado="Disponibles";
       }else{
           $estado="No Disponibles";
       }
    $pdf->Ln(6); 
    
    $pdf->Cell(45, 6, $fila1['codigo'], 1, 0, 'C');
    $pdf->Cell(85, 6, utf8_decode($fila1['titulo']), 1, 0, 'C');
    $pdf->Cell(70, 6, utf8_decode($fila1['autor']), 1, 0, 'C');
    
    $pdf->Cell(30, 6, utf8_decode($fila1['editorial']), 1, 0, 'C');
    $pdf->Cell(30, 6, date_format(date_create($fila1['fecha_publicacion']), 'd-m-Y'), 1, 0, 'C');
    $pdf->Cell(20, 6, utf8_decode($fila1['cantidad']), 1, 0, 'C');
}

$pdf->Output();

?>