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
                $this->Cell(110);
                $this->Cell(120,15,'Activo Fijo Extraviado');
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
	

	?>