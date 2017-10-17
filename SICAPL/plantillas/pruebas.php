<?php
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>
<button onclick="AlertaExttoZZZ()">ENVIAR
    
</button>

<script>
AlertaExttoZZZ();
</script>
    


<?php
include_once './pie_de_pagina.php';
?>

<script type="text/javascript">
    function enviarCat() {
        var nom = document.getElementById('NombreCat').value;
        var cod = document.getElementById('codigoCat').value;
        if (nom != "" && cod != "") {
            var datos = 'nameNombre=' + nom + '&nameApellido=' + cod + 'pase=' + nom;

            $.ajax({
                type: 'post',
                url: 'new_cat.php',
                data: datos,
                success: function (resp) {
                    
                }
            });
        } else {
            alert('no');
        }

    }

</script>