<?php
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_libros::LibrosMasPrestados(Conexion::obtener_conexion());
$i=1;
?>
<style type="text/css">
<!--
table.page_header {width: 100%; border: none; background-color: #ff9900; border-bottom: solid 1mm #AAAADD; padding: 2mm }
    table.page_footer {width: 100%; border: none; background-color: #ff9900; border-top: solid 1mm #AAAADD; padding: 2mm}
    .cabecera{display: block; width: 25%; float: right;}
-->
</style>
 <style>
            .cabecera-izquierda{
        display: block;
        width: 25%;
        float: left;
    }
            .tabla{

                align-content: stretch;
                width: 100%;

            }
            h1 {color: #000033}
            h2 {color: #000055}
            h3 {color: #000077}
            .pie{
                float: bottom;
                margin-bottom: 0;
                text-align: right;
            }
            table{
                border-spacing: 10px;
                margin-top: 10px;
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
                width: 200px;
            }
            

            .cabecera{
                display: block;
                width: 25%;
                float: right;
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
                padding-top: 100px;
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
                    <img src="../imagenes/logoReporte.png" class="cabecera">
                    <img src="../imagenes/logo.png" class="cabecera-izquierda">

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
            <h5 style="text-align: right">
                    Fecha:<?php date_default_timezone_set('America/El_Salvador');echo date('d-m-Y').' Hora:'.date('H:i:s')?>
            </h5>
            <h1 style="text-align: left">
                Reporte de Libros M&aacute;s Prestados
        </h1>
            
        </div>
       
            <!-- Etiqueta para cada pagina del reporte-->
               
                <br><br>
     <div class="tabla"><!-- Inicio Contenido del Reporte (Modificable)-->
        <table border="0"  align="center">
            <tr>
                
                
                <th>C&oacute;digo Libro</th>
                
                <th>T&iacute;tulo</th>

                <th>Veces prestado</th>
            </tr>
            <tr>
                    <td><hr></td><td><hr></td><td><hr></td>
                </tr>
        <?php
            foreach ($listado1 as $fila1) {
                $listado = Repositorio_libros::LibrosDanados2(Conexion::obtener_conexion(), $fila1['titulo']);
                
                ?>
            <br>
            <tr class="espacio">
                <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
            </tr>
            <tr class="espacio">
                <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
            </tr>
            
                <tr>
                    
                </tr>
                
               


                <tr>
                    <td><?php echo $fila1['cl'] ?></td>
                        <td>
                        <?php echo $fila1['titulo'] ?>
                        </td>
                        
                        

                        <td><?php echo $fila1['veces'] ?></td>
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
    
     
          


