document.addEventListener("DOMContentLoaded", function () {
    
    document.getElementById("crearButton").addEventListener("click", function() {
    document.getElementById('contenido').innerHTML = '';

    fetch('index_crear.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('contenido').innerHTML = data;
    });
});
    document.getElementById("borrarButton").addEventListener("click", function() {
    document.getElementById('contenido').innerHTML = '';

    fetch('index_borrar.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('contenido').innerHTML = data;
    });
});
    
    document.getElementById("modificarButton").addEventListener("click", function() {
    document.getElementById('contenido').innerHTML = '';

    fetch('index_modificar.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('contenido').innerHTML = data;
    });
});
    
document.getElementById("listarButton").addEventListener("click", function() {
    document.getElementById('contenido').innerHTML = '';

    fetch('index_listar.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('contenido').innerHTML = data;
    });
});
    
});