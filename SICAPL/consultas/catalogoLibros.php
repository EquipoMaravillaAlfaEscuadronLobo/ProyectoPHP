<?php
	include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::CatalogoLibros(Conexion::obtener_conexion());
?>

	<table id="catalogoLb" padding="20px" class="responsive-table display">
		<thead>
			<tr>
				<th class="text-center">Titulo</th>
				<th class="text-center">Autores</th>
				<th class="text-center">Editoriales</th>
				<th class="text-center">Foto</th>
				<th class="text-center">Fecha de Publicaci&oacute;n</th>
				<th class="text-center">Estado</th>
			</tr>
		</thead>
		<tbody>
			<?php
                        foreach ($listado as $fila) {
                            # code...

                     ?>
			<tr>
							<td class="text-center"><?php echo $fila['titulo'] ?></td>
                            <td class="text-center"><?php echo $fila['autor'] ?></td>
                            <td class="text-center"><?php echo $fila['editorial'] ?></td>
                            <td class="text-center fotosLibros"><img src="../fotoLibros/<?php echo $fila['foto'] ?>" whidth="50px" class="fotosLibros"></td>
                            <td class="text-center"><?php echo date_format(date_create($fila['fecha_publicacion']),'d-m-Y') ?></td>
                            <?php if($fila['estado']==0){echo '<td class="alert alert-success">Disponibles';}else{echo '<td class="alert alert-danger">No Disponibles';}?></td>
			</tr>
			 <?php } ?>
		</tbody>
	</table>