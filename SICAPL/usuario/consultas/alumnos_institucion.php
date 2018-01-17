<?php
//$lista_instituciones = Repositorio_institucion::lista_institucion(Conexion::obtener_conexion());
//
//foreach ($lista_instituciones as $lista_ins) {
//    echo  $lista_ins->getCodigo_institucion() . " "   . $lista_ins->getNombre() . "<br>";
//}
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
                        text: 'ESTE ES EL TITULO'
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
                            name: 'Genero',
                         data: [
                             ['Femenino: 4', 4],
                             ['marroquin: 4', 4],
                                ['Masculino: 3', 3],
                            ],
                        }]
                });
            });


        </script>
        
        <div id="id_grafica_institucion" style="margin-left: 30%"></div>

