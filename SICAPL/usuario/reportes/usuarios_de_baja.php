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

</style>
<page backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm" pagegroup="new">
    <page_header>
        <table class="page_header">
            <tr>
                <td style="width: 100%; text-align: left">
                    <img src="../../imagenes/libros.png" class="cabecera">
                    <img src="../../imagenes/logo.png" class="cabecera-izquierda">
                    
                    <h2>
                        Casa de Encuentro Juvenil
                        </h2>
                    <h3>
                        Verapaz, San Vicente
                    </h3>
                </td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
            <tr>
                <td style="width: 100%; text-align: right">
                    page [[page_cu]]/[[page_nb]]
                </td>
            </tr>
        </table>
    </page_footer>
</page>
<div class="portada">
    <h1>
        Reporte de Alumnos Dados de baja
    </h1>
    <h3>
        <?php date_default_timezone_set('America/El_Salvador');
        echo date('d-m-Y') . '(' . date('H:i:s') . ')' ?>
    </h3>
</div>
<?php
foreach ($listado1 as $fila1) {
    $listado = Repositorio_libros::LibrosDadosBaja2(Conexion::obtener_conexion(), $fila1['titulo']);
    ?>
    <page pageset="old"><!-- Etiqueta para cada pagina del reporte-->

        <br><br><br>
        <div class="tabla"><!-- Inicio Contenido del Reporte (Modificable)-->

            <table border="0"  align="center">
                <tr>
                    <th>C&oacute;digo</th>

                    <th>Motivo</th>
                </tr>
                <br>
                <tr class="espacio">
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>
                <tr class="espacio">
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>

                <tr>
                    <td>
                        <b><?php echo $fila1['titulo'] ?></b>
                    </td>
                </tr>
                <tr>
                    <td><hr></td><td><hr></td>
                </tr>
                <?php
                foreach ($listado as $fila) {
                    ?>


                    <tr>
                        <td><?php echo $fila['codigo'] ?></td>

                        <td><?php echo $fila['motivo'] ?></td>
                    </tr>
                    <?php
                }
                ?>
                <tr class="espacio">
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>
                <tr class="espacio">
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>
                <tr class="espacio">
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>



            </table>
        </div><!-- Fin Contenido del Reporte (Modificable)-->

    </page>
    <?php
}


$html = ob_get_clean();

$html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output('Reporte 1.pdf');
?>