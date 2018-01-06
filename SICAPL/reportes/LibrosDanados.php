<?php
    include_once '../plantillas/cabecera.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    
    <input type="button" onclick="mostrar()" value="mostrar">
    
        
    <?php
     include_once '../plantillas/pie_de_pagina.php';
    ?>
    <script>
        function mostrar(){
        var slider = document.createElement("input");
slider.type = "range";
 
swal({
            title: "Seguro que desea dar de baja",
            text: "Escriba aqui el motivo",
            type: "input",
            showCancelButton: true,
            closeOnConfirm: false,
            inputPlaceholder: "Escribe algo"
        }, function (inputValue) {
            if (inputValue === false)
                return false;
            
            //swal("Nice!", "You wrote: " + inputValue, "success");


        });
        }
    </script>
</body>
</html>