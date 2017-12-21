<?php

class repositorio_backup {

    public static function generar_backup() {
        include_once '../app/config.inc.php';
        $fecha = date("d/m/Y h:i:s");

        $salida_sql = "Respaldo" . '_' . $fecha . ".sql";
        $dump = "mysqldump -h$nombre_servidor -u$nombre_usuario -p$password --opt $nombre_base_datos > $salida_sql";

        system($dump, $output);
        $zip = new ZipArchive();
        $salida_zip = "Respaldo" . '_' . $fecha . ".zip";
        if ($zip->open($salida_zip, ZipArchive::CREATE) === true) {
            $zip->addFile($salida_sql);
            $zip->close();
            //    unlink($salida_sql);
            header('Location: $salida_zip');
        } else {
            echo 'erro';
        }
    }

    public static function otroa() {
        $db_host = "localhost"; //Host del Servidor MySQL
        $db_name = "diseno1"; //Nombre de la Base de datos
        $db_user = "root"; //Usuario de MySQL
        $db_pass = ""; //Password de Usuario MySQL

        $fecha = date("d-m-Y_His"); //Obtenemos la fecha y hora para identificar el respaldo
        // Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
        $salida_sql = $db_name . '_' . $fecha . '.sql';

        //Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
        system('C:\xampp\mysql\bin\mysqldump' . " -h$db_host -u$db_user -p$db_pass $db_name > " . "$salida_sql", $sal);

        $zip = new ZipArchive(); //Objeto de Libreria ZipArchive
        //Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
        $salida_zip = $db_name . '_' . $fecha . '.zip';

        if ($zip->open($salida_zip, ZIPARCHIVE::CREATE) === true) { //Creamos y abrimos el archivo ZIP
            $zip->addFile($salida_sql); //Agregamos el archivo SQL a ZIP
            $zip->close(); //Cerramos el ZIP
            unlink($salida_sql); //Eliminamos el archivo temporal SQL
            header("Location: $salida_zip"); // Redireccionamos para descargar el Arcivo ZIP
        } else {
            echo 'Error'; //Enviamos el mensaje de error
        }
    }

}

?>