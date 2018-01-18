<?php
$titulo1 ='BACKUP';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include_once '../app/Conexion.php';
include_once './repositorio_bitacora.php';


include './repositorio_Connet.php';
$day=date("d");
$mont=date("m");
$year=date("Y");
$hora=date("H-i-s");
$fecha=$day.'-'.$mont.'-'.$year;
$DataBASE=$fecha."_(".$hora."_hrs).sql";
$tables=array();
$result=SGBD::sql('SHOW TABLES');
if($result){
    while($row=mysqli_fetch_row($result)){
       $tables[] = $row[0];
    }
    $sql='SET FOREIGN_KEY_CHECKS=0;'."\n\n";
    $sql.='CREATE DATABASE IF NOT EXISTS '.BD.";\n\n";
    $sql.='USE '.BD.";\n\n";;
    foreach($tables as $table){
        $result=SGBD::sql('SELECT * FROM '.$table);
        if($result){
            $numFields=mysqli_num_fields($result);
            $sql.='DROP TABLE IF EXISTS '.$table.';';
            $row2=mysqli_fetch_row(SGBD::sql('SHOW CREATE TABLE '.$table));
            $sql.="\n\n".$row2[1].";\n\n";
            for ($i=0; $i < $numFields; $i++){
                while($row=mysqli_fetch_row($result)){
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
            $error=1;
        }
    }
    if($error==1){
        echo 'Ocurrio un error inesperado al crear la copia de seguridad';
    }else{
        
        chmod(BACKUP_PATH, 0777);
        $sql.='SET FOREIGN_KEY_CHECKS=1;';
        $handle=fopen(BACKUP_PATH.$DataBASE,'w+');
        if(fwrite($handle, $sql)){
            fclose($handle);
            
            $accion = 'Se ralizó una copia de seguridad de los datos del sistema';
            Conexion::abrir_conexion();
            Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);
            
             echo '<script>swal({
                    title: "Exito",
                    text: "Acaba de Realizarse un copia de seguridad!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },function () {location.href="../app/home.php";});</script>';
        }else{
            
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