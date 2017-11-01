<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Categoria.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_categoria.php';
include_once '../repositorios/repositorio_administrador.inc.php';
Conexion::abrir_conexion();
echo $_POST['libro'];
$lista_cat = Repositorio_activo::lista_activo3(Conexion::obtener_conexion(),$_POST['libro']);
foreach ($lista_cat as $lista) {
    echo '<br>';
echo $lista[0];
}
                                
?> 
