document.getElementById('boton_menu').addEventListener("click", activarMenu);

function activarMenu(){
    document.getElementById('menu_desplegable').classList.toggle('oculto2');
    document.getElementById('contenedor_nav').classList.toggle('oculto');
    document.getElementById('boton_menu').classList.toggle('cerrar-menu');
}