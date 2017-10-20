function validarLibros () {
    var valido=1;
    if (document.getElementById('codigol').value==""||
        document.getElementById('titulo').value==""||
        document.getElementById('clasificacion').value==""||
        document.getElementById('cantidad').value==""||
        document.getElementById('editorial').value==""||
        document.getElementById('fecha_pub').value==""||
        document.getElementById('foto').value=="") {
        valido=0;
    };
    return valido;
}