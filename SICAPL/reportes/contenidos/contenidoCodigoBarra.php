<?php
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado1 = Repositorio_libros::CodigoBarras(Conexion::obtener_conexion());
?>

<style>
    .iz{
       
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
<page>
<?php
foreach ($listado1 as $fila1) {
    $listado = Repositorio_libros::CodigoBarras2(Conexion::obtener_conexion(), $fila1['titulo']);
    ?>
    <!-- Etiqueta para cada pagina del reporte-->

    
        <div class="tabla"><!-- Inicio Contenido del Reporte (Modificable)-->

            <table border="0"  align="center" cellspacing="20">
                <tr>
                    <td>
                        <b><?php echo $fila1['titulo'] ?></b>
                    </td>
                    <td>&nbsp;</td>
                </tr>

                <?php
                $i=1;
                foreach ($listado as $fila) {
                   
                    ?>
                    <tr>
                        <td>
                            <div class="iz">
                                <barcode dimension="1D" type="C128" value="<?php echo $fila['codigo_libro'] ?>" label="label" style="width:100%; height:15mm; color: #000000; font-size: 4mm"></barcode>
                            </div>
                        </td>                
                    </tr>

                   
                            <?php
                           
                    
                }
                ?>



            </table>
        </div><!-- Fin Contenido del Reporte (Modificable)-->

    
    <?php
}
?>
</page>


