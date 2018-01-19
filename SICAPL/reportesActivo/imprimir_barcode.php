<?php
include_once '../reportes/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();


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

        align-content: center;
        width: 100%;
        margin-left: 100px;

    }
    h1 {color: #000033}
    h2 {color: #000055}
    h3 {color: #000077}
    .tabla table td{
        padding: 0;
        margin: 0;
        width: 700px;
        
        align-content: center;
    }
    .contenedor{
        align-content: center;
        text-align: center;
        
        
    }



</style>


<page pageset="old"><!-- Etiqueta para cada pagina del reporte-->

    <?php 
   
    $cod=$_REQUEST['codigo'];
    $longitud = count($_REQUEST['codigo']);
    for ($i = 0; $i < $longitud; $i++) { 
   
        ?>
    
    <div class="tabla">
        <table>
          
                    <tr>
                        <td>
                            <div>
                                <barcode dimension="1D" type="C128" value="<?php echo $cod[$i] ?>" label="label" style="width:70%; height:15mm; color: #000000; font-size: 4mm"></barcode>
                            </div>
                        </td>                
                    </tr>

                    
                         
        </table>
        
         <?php echo $longitud ." ".$_REQUEST['codigo'][0] ?>
        
    </div>
    <br>
<?php 

                    }
?>


</page>
<?php
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output('Reporte 1.pdf');
?>