<?php
$titulo1 ='BACKUP';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include_once '../app/Conexion.php';
include_once './repositorio_bitacora.php';

//estos metodos seran utilizados al momento de pulsar el boton crear backup que se encuentra en 
//el archivo backup_restore que se encuentra en la carpeta seguridad

//incluimos la configuracion hecha en connet
include './repositorio_Connet.php';

//definimos la hora y la fecha del backup
$day=date("d");
$mont=date("m");
$year=date("Y");
$hora=date("H-i-s");
$fecha=$day.'-'.$mont.'-'.$year;

//definimos el nombre del archivo para el backup
$DataBASE=$fecha."_(".$hora."_hrs).sql";
$tables=array();
$result=SGBD::sql('SHOW TABLES');
if($result){
    //si la direccion es correcta empezamos a crear el backup
    while($row=mysqli_fetch_row($result)){
       $tables[] = $row[0];
    }
    //sentencias para la creacion de una base de datos
    $sql='SET FOREIGN_KEY_CHECKS=0;'."\n\n";
    $sql.='CREATE DATABASE IF NOT EXISTS '.BD.";\n\n";
    $sql.='USE '.BD.";\n\n";;
    foreach($tables as $table){
        //seleccionamos los datos de las tablas 
        $result=SGBD::sql('SELECT * FROM '.$table);
        if($result){
            $numFields=mysqli_num_fields($result);
            $sql.='DROP TABLE IF EXISTS '.$table.';';
            $row2=mysqli_fetch_row(SGBD::sql('SHOW CREATE TABLE '.$table));
            $sql.="\n\n".$row2[1].";\n\n";
            for ($i=0; $i < $numFields; $i++){
                while($row=mysqli_fetch_row($result)){
                    ///se insertan los valores en las tablas correspondientes
                    $sql.='INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$numFields; $j++){
                        $row[$j]=addslashes($row[$j]);
                        $row[$j]=str_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])){
                            $sql .= '"'.$row[$j].'"' ;
                        }
                        else{
                            $sql.= '""';
                        }
                        if ($j < ($numFields-1)){
                            $sql .= ',';
                        }
                    }
                    $sql.= ");\n";
                }
            }
            $sql.="\n\n\n";
        }else{
            //si hay errores con la creacion del sql ponemos esta bandera
            $error=1;
        }
    }
    if($error==1){
        echo 'Ocurrio un error inesperado al crear la copia de seguridad';
    }else{
        /// BACKUP_PATH es la direccion donde estamos guardando el sql creado
        chmod(BACKUP_PATH, 0777);
        $sql.='SET FOREIGN_KEY_CHECKS=1;';
        $handle=fopen(BACKUP_PATH.$DataBASE,'w+');
        if(fwrite($handle, $sql)){
            fclose($handle);
            
            ///se crea el registro de la accion realizada y la mandamos a guardar en el backup
            $accion = 'Se ralizó una copia de seguridad de los datos del sistema';
            Conexion::abrir_conexion();
            Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);
            
            
            //si no hubo problemas mostramos un mensaje de confirmacion y luego redirigimos al administrador
             echo '<script>swal({
                    title: "Exito",
                    text: "Acaba de Realizarse un copia de seguridad!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },function () {location.href="../app/home.php";});</script>';
        }else{
            //informamos al administrador por cualquier problema ocurrido y luego redirigimos
             echo '<script>swal({
                    title: "Exito",
                    text: "Acaba de Realizarse un copia de seguridad!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },function () {location.href="../app/home.php";});</script>';
        }
    }
}else{
     echo '<script>swal({
                    title: "Exito",
                    text: "Acaba de Realizarse un copia de seguridad!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },function () {location.href="../app/home.php";});</script>';
    
}
mysqli_free_result($result);

include_once '../plantillas/pie_de_pagina.php';
?>