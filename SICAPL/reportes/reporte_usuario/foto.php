<?php
require '../../reportes/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();
include_once '../../reportes/codigoBarras.php';
include_once '../../app/Conexion.php';
include_once '../../modelos/Libros.php';
include_once '../../repositorios/respositorio_libros.php';
$html=ob_get_clean();
$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
$html2pdf->writeHTML('<barcode dimension="1D" type="C128" value="cej-002-003-pa-003-002" label="label" style="width:70%; height:15mm; background: orange; color: #770000; font-size: 4mm"></barcode>');
	


Conexion::abrir_conexion();
$listado1 = Repositorio_libros::LibrosDadosBaja(Conexion::obtener_conexion());
$i = 1;
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <style>
        .tabla{

            align-content: stretch;
            width: 100%;

        }
        h1 {color: #000033 ;
            text-align: center}
        h2 {color: #000055;
            text-align: center}
        h3 {color: #000077; text-align: center}
        .pie{
            float: bottom;
            margin-bottom: 0;
            text-align: right;
        }
        table{
            border-spacing: 10px;

            border-bottom: 1px;

        }
        #titulo{

        }
        .titulo{

            width: 600px !important;
            text-align: left !important;
        }
        .fecha{

            width: 100px !important;
            text-align: right;
        }
        .espacio{
            width: 110px;
        }

        .tabla table td{
            padding: 0;
            margin: 0;
            width: 300px;
        }


        .cabecera{
            display: block;
            width: 25%;
            float: right;
        }
        .cabecera-izquierda{
            display: block;
            width: 25%;
            float: left;
        }
        .cabecera h1{
            text-align: center;
        }
        table.page_footer {width: 100%;
                           border: none;
                           background-color: #DDDDFF;
                           border-top: solid 1mm #AAAADD;
                           padding: 2mm;
        }
        table.page_header {width: 100%;
                           border: none;
                           background-color: #DDDDFF;
                           border-bottom: solid 1mm #AAAADD;
                           padding: 2mm; 
        }
        .portada{
            padding-top: 500px;
            float: bottom;
            text-align: center;
            width: 100%;
        }
        .frontal{
            border-width: 1px;
            border-style: dashed;
            border-color: red;
            margin: 10px;
            width: 295px;
            height: 195px;

        }
        .encabezado{
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .foto{
            margin-left:  0px;
            height: 135px;
            width: 110px;
            margin-left:  10px;

        }
        .texto{

            width: 160px;
            height: 120px;
            background: orange;
            position: relative;
            left: 4px;
            top: -35px;

        }
        .texto{

            width: 160px;
            height: 120px;
            background: orange;
            position: relative;
            left: 4px;
            top: -35px;

        }
        
        .ib{
            display: inline-block;
        }
        p{
            text-align: center;
            font-size: 12px;
        }


    </style>

    <body>
    <page pageset="old"><!-- Etiqueta para cada pagina del reporte-->

        <br><br><br><br><br><br><br><br>
        <div class="frontal ib">
            <p class="encabezado">CASA DE ENCUENTRO JUVENIL</p>

            <img src="../../imagenes/hqdefault.jpg" class="foto ib" alt="">

            <div class="ib texto">
                <p> CARNET: <strong>  MA14049 </strong><p> 
                <p> NOMBRE:  <strong>BORIS RICARDO MIRANDA AYALA</strong></p> 
                <p>FECHA EMISIÓN:  <strong><?php date_default_timezone_set('America/El_Salvador');
echo date('d/m/Y');
?></strong> </p>
            </div>
        </div>
        <div class="frontal ib">
            <p class="encabezado">INFORMACIÓN</p>
<?php $html2pdf->writeHTML('<barcode dimension="1D" type="C128" value="cej-002-003-pa-003-002" label="label" style="width:70%; height:15mm; color: #770000; font-size: 4mm"></barcode>');?>
            

            
        </div>
        
        
             



    </page>
</body>
</html>