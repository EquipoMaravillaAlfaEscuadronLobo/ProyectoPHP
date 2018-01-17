<?php
include_once './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();
include_once '../app/Conexion.php';
include_once '../modelos/Usuario.php';
include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();

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
    .iz{
        border: 1px black solid;
        width: 500px;
        height: 100px;
        padding: 5px 5px 5px 5px;
    }
    
    .dr{
        border: 1px black solid;
        width: 500px;
        height: 100px;
        margin-left: 540px;
        margin-top: -133px;
        padding: 5px 5px 5px 5px;
        
    }
    .tabla{

        align-content: stretch;
        width: 100%;

    }
    h1 {color: #000033}
    h2 {color: #000055}
    h3 {color: #000077}
    .tabla table td{
        padding: 0;
        margin: 0;
        width: 450px;
    }




</style>


<page pageset="old"><!-- Etiqueta para cada pagina del reporte-->

    <?php 
    $i=1;
    $libros = Repositorio_libros::ListaDarBaja(Conexion::obtener_conexion(), $_REQUEST['codigo']);
    foreach ($libros as $listado) { ?>
    
    <div class="contenedor">
        <table>
            <?php
                
                
                    if($i==1){
                    ?>
                    <tr>
                        <td>
                            <div class="iz">
                                <barcode dimension="1D" type="C128" value="<?php echo $listado['codigo_libro'] ?>" label="label" style="width:100%; height:15mm; color: #000000; font-size: 4mm"></barcode>
                            </div>
                        </td>                
                    </tr>

                    <?php
                    $i=2;
                    }else{
                        
                        ?>
                            <tr>
                        <td>
                            <div class="dr">
                                <barcode dimension="1D" type="C128" value="<?php echo $listado['codigo_libro'] ?>" label="label" style="width:100%; height:15mm; color: #000000; font-size: 4mm"></barcode>
                            </div>
                        </td>                
                    </tr>
                            <?php
                            $i=1;
                    }
                
                ?>
        </table>
        
        
        
    </div>
    <br>
<?php 

                    }
?>


</page>
<?php
$html = ob_get_clean();

$html2pdf = new Html2Pdf('L', 'A4', 'es', 'true', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output('Reporte 1.pdf');
?>