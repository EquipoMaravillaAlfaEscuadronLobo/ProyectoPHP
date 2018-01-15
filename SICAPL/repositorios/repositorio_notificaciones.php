<?php

class repositorio_notificaciones {

    public static function numero_notifiaciones($conexion) {
        $prestamo_libros = 0;
        $prestamo_activo = 0;

        $listado = self::ListaPrestamos($conexion);
        foreach ($listado as $fila) {
            $fdev = date_create($fila['Devolucion']);
            $hoy = new DateTime("now");

            $rango = new DateTime("now +2 day");
             if ( ($fdev < $rango)) {
                $prestamo_libros++;
            }
        }

        $listado = self::ListaPrestamosAct(Conexion::obtener_conexion());
        foreach ($listado as $fila) {
            $fdev = date_create($fila['Devolucion']);
            $hoy = new DateTime("now +2 day");
            $codigo = $fila['codigo'];
            if ($fila['estado'] == 0) {
                if ($fdev < $hoy) {
                    $prestamo_activo++;
//                 echo date_format($fdev, 'd-m-Y'); 
                }
            }
        }
//        echo 'activo ' . $prestamo_activo;
//        echo ' libro ' . $prestamo_libros . ' ';
        return $prestamo_activo + $prestamo_libros;
    }

    public static function ListaPrestamos($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                        usuarios.codigo_usuario as user,
                        (CONCAT(usuarios.nombre,' ',usuarios.apellido)) as nombre,
                        prestamo_libros.codigo_plibro as codigo,
                        (prestamo_libros.fecha_salida),
                        (prestamo_libros.fecha_devolucion) as Devolucion,
                        libros.codigo_libro as cl,
                        GROUP_CONCAT(libros.titulo SEPARATOR ' - ') as titulo,
                        usuarios.telefono as telefono,
                        usuarios.correo as correo,
                        (Select COUNT(DISTINCT libros.codigo_libro)) as cantidad
                        FROM
                        usuarios
                        INNER JOIN prestamo_libros ON prestamo_libros.codigo_usuario = usuarios.codigo_usuario
                        INNER JOIN movimiento_libros ON movimiento_libros.codigo_plibro = prestamo_libros.codigo_plibro
                        INNER JOIN libros ON movimiento_libros.codigo_libro = libros.codigo_libro
                        WHERE
                        prestamo_libros.estado = 0 and libros.estado=2
                        GROUP BY movimiento_libros.codigo_plibro";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function ListaPrestamosAct($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT  (CONCAT(usuarios.nombre,' ',usuarios.apellido)) as nombre, 
                        prestamo_activos.codigo_pactivo as codigo, 
                        (prestamo_activos.fecha_salida),   
                        (movimiento_actvos.codigo_activo) as titulo, 
                        (prestamo_activos.fecha_devolucion) as Devolucion,
                        prestamo_activos.estado as estado
                        FROM usuarios 
                        INNER JOIN prestamo_activos ON prestamo_activos.usuarios_codigo= usuarios.codigo_usuario 
                        INNER JOIN movimiento_actvos ON movimiento_actvos.codigo_pactivo = prestamo_activos.codigo_pactivo 
                        INNER JOIN actvos ON movimiento_actvos.codigo_activo = actvos.codigo_activo
                        GROUP BY prestamo_activos.codigo_pactivo
                        ORDER BY
                        estado ASC,
                        Devolucion ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

}
