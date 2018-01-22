<?php
Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios_eliminados(Conexion::obtener_conexion());
$direccion = '../../SICAPL/foto_usuario/';
?>
<table padding="20px" class="responsive-table display" id="tabla-paginada4">
    <thead class="">

    <th class="text-center"></th>
    <th class="text-center">Carnet</th>
    <th class="text-center">Nombre Completo</th>
    <th class="text-center">Motivo de eliminación</th>
    <th class="text-center">Restaurar</th>
</thead>
<tbody>
    <?php foreach ($lista_usuarios as $lista_usu) { ?>
        <tr>
            <td class="text-center">
                <img class="presentacionXZ fotosLibros" src="<?php echo $direccion . $lista_usu->getFoto(); ?>"/>
            </td>


            <th class="text-center"><?php echo $lista_usu->getCodigo_usuario(); ?></th>
            <td class="text-center"><?php echo $lista_usu->getNombre() . " " . $lista_usu->getApellido(); ?></td>
            <td class="text-center"><?php echo $lista_usu->getMotivo_eliminacion(); ?></td>

            <td class="text-center">
                <button class="btn btn-success" onclick="restaurar_usuario('<?php echo $lista_usu->getCodigo_usuario();?>','<?php echo $lista_usu->getNombre()?>')">
                    <i class="Medium material-icons prefix">autorenew</i> 
                </button>

            </td>
        </tr>
        <?php
    }
    ?>

</tbody>
</table>

<script>
function restaurar_usuario(carnet,nombre){
    swal({
  title: "Desea restaurar este usuario?",
  text: "presione sí para confirmar!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-success",
  confirmButtonText: "Sí, Restaurar",
  cancelButtonText: "Cancelar",
  closeOnConfirm: false
},
function(){
    location.href="consultas/restaurar_usuario.php?carnet="+carnet+"&nombre="+nombre;
  
});
}

</script>

