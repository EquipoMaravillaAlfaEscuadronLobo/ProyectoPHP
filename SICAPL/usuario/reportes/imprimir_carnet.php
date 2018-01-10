<?php
require '../../reportes/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();
include_once '../../app/Conexion.php';
include_once '../../modelos/Libros.php';
include_once '../../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_libros::LibrosDadosBaja(Conexion::obtener_conexion());
$i = 1;
?>

<style type="text/css">
    <!--
    table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
    table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
    .cabecera{display: inline; width: 25%; float: right;}
    .cabecera-izquierda{display: inline; width: 25%; float: left;}
    -->
</style>
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

    .contenedor{
        
        width: 750px;
        height:200px;
        

    }
    .contenedor > div{
        display: inline-block;
    }

    .frontal{
        border-width: 1px;
        border-style: dashed;
        border-color: red;
        margin: 10px;
        width: 295px;
        height: 195px;
        margin-right: 0px;
        background: #EEEE00; 
    }
    .trasero{
        border-width: 1px;
        border-style: dashed;
        border-color: red;
        margin: 10px;
        width: 295px;
        height: 195px;
        margin-right: 0px;
        background: #EEEE00;
        position: absolute;
        top: 20px;
        left : 420px;
        



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
        background: #EEEE00;
        position: relative;
        left: 4px;
        top: 0px;

    }


    .ib{
        display: inline-block;
    }
    p{
        text-align: center;
        font-size: 12px;
    }
    .datos{
        width: 295px;
        height: 100px;
        text-align: center;
        font-size: 12px;
        background: #388E3C;
    }




</style>


<page pageset="old"><!-- Etiqueta para cada pagina del reporte-->

    <div class="contenedor">

        <div class="ib frontal">
            <p class="encabezado">CASA DE ENCUENTRO JUVENIL</p>

            <img src="../../imagenes/hqdefault.jpg" class="foto ib" alt="">

            <div class="texto ib ">
                <p> CARNET:  <strong>MA14049</strong></p> 
                <p> NOMBRE:  <strong>BORIS RICARDO MIRANDA AYALA</strong></p> 
                <p>FECHA EMISIÓN:  <strong><?php date_default_timezone_set('America/El_Salvador');
echo date('d/m/Y');
?></strong> </p>
            </div>
        </div>

        <div class="trasero">

            <div class="ib datos">
                <p> TELÉFONO :  <strong>7777-7777</strong></p> 
                <p> CORREO:  <strong>brmiranda009@gmail.com</strong></p> 
                <p> DIRECCION :  <strong>Verapaz</strong> </p>
                <p> <barcode dimension="1D"
                             type="C128"
                             value="cej-002-003-pa-003-002" 
                             label="label"
                             style="width:70%;
                             height:15mm;
                             color: black;
                             font-size: 4mm">
                </barcode> </p>
            </div>
        </div>
    </div>



</page>
<?php
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output('Reporte 1.pdf');
?>