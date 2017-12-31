<?php

include_once './Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';
include_once '../repositorios/repositorio_recuperacion.inc.php';


$cabeceras = 'From: SICAPL <cumples@example.com>' . "\r\n";
Conexion::abrir_conexion();
$admin=Repositorio_administrador::obtener_email(Conexion::obtener_conexion(), $_POST['correo']);
if($admin->getEmail()!=""){
    
    $userName=$admin->getCodigo_administrador();
    $string_aleatorio= sa(10);
    $url_secreta=hash('sha256',$string_aleatorio.$userName);
    
    $peticion_generada= RepositorioRecuperacion::registrarPeticion(Conexion::obtener_conexion(), $admin->getCodigo_administrador(), $url_secreta);
if (mail($_POST['correo'], "Recuperacion de contraseña", "Prueba2",$cabeceras)) {
    echo "ENCONTRADO";
}else{
    echo "No Enviado";
}

}else{
    echo "No Encontrado";
}




function sa($longitud) {
    $caracteres="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWKYZ1234567890";
    $numero_caracteres= strlen($caracteres);
    $string_aleatorio='';
    
    for ($i = 0; $i < $numero_caracteres; $i++) {
        $string_aleatorio.=$caracteres[rand(0, $numero_caracteres-1)];
    }
    return $string_aleatorio;
    
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

