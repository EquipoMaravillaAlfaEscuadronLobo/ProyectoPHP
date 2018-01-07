<?php
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_libros::LibrosDanados(Conexion::obtener_conexion());
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Libros Da&ntilde;ados</title>
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
                width: 300px;
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

        </style>
    </head>
    <body>

    <page_header>
        <table class="page_header">
            <tr>
                <td style="width: 100%; text-align: left">
                    <img src="../imagenes/logo.png" class="cabecera">
                    <h1>
                        Casa de Encuentro Juvenil <br>Verapaz, San Vicente
                    </h1>
                </td>
            </tr>
        </table>
    </page_header>
    <br><br>







    <br><br><br>
    <br>
    <br>
    <br>
    <div id="titulo"><!-- Inicio Titulo del Reporte (Modificable)-->
        <table border='0' align='center'>
            <tr>
                
                <td class="titulo" align='left'>
            <h2>
                Reporte de libros Da&ntilde;ados
            </h2>
                </td>
                <td class="espacio">&nbsp;</td>
                <td class="fecha">
                <h3>
                    <?php date_default_timezone_set('America/El_Salvador');echo date('d-m-Y').'('.date('H:i:s').')'?>
                </h3>
            </td>
            </tr>
        </table>
    </div><!-- Fin Titulo del Reporte (Modificable)-->
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
            <?php
            foreach ($listado1 as $fila1) {
                $listado = Repositorio_libros::LibrosDanados2(Conexion::obtener_conexion(), $fila1['titulo']);
                ?>
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
            <?php }
            ?>

        </table>
    </div><!-- Fin Contenido del Reporte (Modificable)-->


    <page_footer>
        <table class="page_footer">

            <tr>





                <td style="width: 100%; text-align: right">

                    pag [[page_cu]]/[[page_nb]]
                </td>

            </tr>
        </table>
    </page_footer>

</body>
<footer>

</footer>
</html>




