<?php
include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::ListaLibros(Conexion::obtener_conexion());
 ?>
<table padding="20px" class="responsive-table display" id="data-table-simple">
                    <thead class="">
                    <th class="text-center"></th>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Autores</th>
                    <th class="text-center">Editorial</th>
                    <th class="text-center">Cantidad</th>


                    <th class="text-center"></th>

                    </thead>
                    <tbody>

                    <?php
                        foreach ($listado as $fila) {
                            # code...

                     ?>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionLib('<?php echo $fila['codigo'] ?>','<?php echo $fila['cedit'] ?>','<?php echo $fila['titulo'] ?>','<?php echo $fila['fecha_publicacion'] ?>','<?php echo $fila['foto'] ?>','<?php echo $fila['cantidad'] ?>')"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center"><?php echo $fila['titulo'] ?></td>
                            <td class="text-center"><?php echo $fila['autor'] ?></td>
                            <td class="text-center"><?php echo $fila['editorial'] ?></td>
                            <td class="text-center"><?php echo $fila['cantidad'] ?></td>


                            <td class="text-center"><button class="btn btn-info" onclick="abrirBajaLibros()"> <i class="fa fa-eye"></i> </button></td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>


               <div id="edicionLib" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('frm_edit_lib.php'); ?>
    </div>
    <div class="modal-footer">
    <div class="row">
        <div class="col-md-6 text-right"><button onclick="editLibro()" class="waves-effect btn btn-success">Actualizar</button></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>

<div id="bajaLib" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('listadoDarBaja.php'); ?>
    </div>
    <div class="modal-footer">
        <div class="row">

            <div class="col-md-12 text-center"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>



<script type="text/javascript">
    function editLibro () {
        document.frmEditLib.submit();
    }

    function Baja (codigo) {
        swal({
  title: "Seguro que desea dar de baja",
  text: "Escriba aqui el motivo",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  inputPlaceholder: "Escribe algo"
}, function (inputValue) {
        if (inputValue === false) return false;
        $.ajax({
        url:'bajaLibro.php?codigo='+codigo+'&motivo='+inputValue,
        type:'GET',
        dataType: "html",
        data:{codigo: codigo, motivo:inputValue},
    cache: false,
    contentType: false,
    processData: false
    }).done(function(resp){
       if(resp==1){
                swal({
                    title: "Exito",
                    text: "Baja Realizada",
                    type: "success"},
                    function(){
                       location.href="inicio_b.php";



                    }

                    );

         }else{
                swal ( "Oops" ,  "No se pudo dar de Baja" ,  "error" )

         }
    })
   //swal("Nice!", "You wrote: " + inputValue, "success");


});
    }
</script>
