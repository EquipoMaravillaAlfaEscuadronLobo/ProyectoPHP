<?php
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_libros::CodigoBarras(Conexion::obtener_conexion());

?>

 <style>
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
                width: 500px;
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
                padding-top: 500px;
                float: bottom;
                text-align: center;
                width: 100%;
            }

        </style>
       <?php
            foreach ($listado1 as $fila1) {
                $listado = Repositorio_libros::CodigoBarras2(Conexion::obtener_conexion(), $fila1['titulo']);
                
                ?>
            <page pageset="new"><!-- Etiqueta para cada pagina del reporte-->
               
    
     <div class="tabla"><!-- Inicio Contenido del Reporte (Modificable)-->
        
        <table border="0"  align="center" cellspacing="20">
                <tr>
                    <td>
                        <b><?php echo $fila1['titulo'] ?></b>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                
                <?php
                
                foreach ($listado as $fila) {
                    
                    ?>
                <tr>
                        <td><barcode dimension="1D" type="C128" value="<?php echo $fila['codigo_libro'] ?>" label="label" style="width:100%; height:15mm; color: #000000; font-size: 4mm"></barcode></td>                
                    
            </tr>
                    
                        <?php
                    
                        
                }
                ?>
        
               

        </table>
    </div><!-- Fin Contenido del Reporte (Modificable)-->
    
     </page>
            <?php 
            
                }
            
            ?>


