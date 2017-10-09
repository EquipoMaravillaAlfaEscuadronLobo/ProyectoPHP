<<<<<<< HEAD
<?php  session_start(); 
    if (!isset($_SESSION['user'])&&$titulo1!="Inicio de Sesion") {
        header("Location: ../index.php");
    }else{
        if (isset($_SESSION['user'])&&$titulo1=="Inicio de Sesion") {
        header("Location: home.php");
    }
    }
=======
<?php
//    session_start();
//    if (!isset($_SESSION['user'])&&$titulo1!="Inicio de Sesion") {
//        header("Location: ../index.php");
//    }else{
//        if (isset($_SESSION['user'])&&$titulo1=="Inicio de Sesion") {
//        header("Location: home.php");
//    }
//    }
>>>>>>> e258c8581f0973586c14e50acd33f518fabac066
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
        <title><?php echo $titulo1; ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/jquery.dataTables.min.css" rel="stylesheet">

        <link href="../css/materialize.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link href="../css/foto.css" rel="stylesheet">
        <link href="../css/materialdesignicons.min.css" rel="stylesheet">
        <link href="../css/sweetalert.css" rel="stylesheet">
        
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <script src="../js/sweetalert.min.js"></script>
      

    </head>
    <body>