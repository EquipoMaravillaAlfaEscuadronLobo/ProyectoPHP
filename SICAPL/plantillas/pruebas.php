<?php
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>
<input type="hidden" id="ok" name="ok">
<button onclick="AlertaExttoZZZ()">ENVIAR
    
</button>

<script>
function ok{
    document.getElementById('ok');
    document.getElementById('ok');
}
</script>

<?php
include_once './pie_de_pagina.php';
<<<<<<< HEAD
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
=======



?>
>>>>>>> 3b41b32c13e525b69db870f9fe342940d979ee91
