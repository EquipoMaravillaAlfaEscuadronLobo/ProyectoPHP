<?php
include_once '../repositorios/repositorio_proveedor.php';
include_once '../app/Conexion.php';
include_once '../modelos/Proveedor.php';

Conexion::abrir_conexion();
$lista_pro = Repositorio_proveedor::lista_proveedores(Conexion::obtener_conexion());
foreach ($lista_pro as $lista) {
echo"<option value='".$lista->getCodigo_proveedor()."'>".$lista->getNombre()."</option>";
}
                                
?> 
