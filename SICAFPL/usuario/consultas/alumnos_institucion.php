<?php
$lista_instituciones = Repositorio_institucion::lista_institucion(Conexion::obtener_conexion());
foreach ($lista_instituciones as $otra){
    $cantidad_usuario = Repositorio_institucion::usuario_por_institucion(Conexion::obtener_conexion(), $otra->getCodigo_institucion());
    echo 'N° '. $otra->getCodigo_institucion() ." - " . $otra->getNombre() ." Usuarios = ".$cantidad_usuario. '<br>';
}
    

?>
<script type="text/javascript">
            $(function () {
                $('#id_grafica_institucion').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: ''
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'red'
                                }
                            }
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'Usuarios',
                         data: [
                        <?php foreach ($lista_instituciones as $lista_ins){
                         $cantidad_usuario = Repositorio_institucion::usuario_por_institucion(Conexion::obtener_conexion(), $lista_ins->getCodigo_institucion());
                        ?>     
                        
                        ['<?php  echo "(N° ". $lista_ins->getCodigo_institucion() . ")";?>', <?php echo $cantidad_usuario ;?>],<?php } ?>
                             
                             
                            ],
                        }]
                });
            });


        </script>
        
        <div id="id_grafica_institucion" style="margin-left: 30%;"></div>

