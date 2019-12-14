var form = document.getElementById('compraConfirmadaForm');

form.onsubmit = EventoCarrito;

function EventoCarrito(ev){
    ev.preventDefault();
    swal("¡Elemento agregado al carrito!","Gracias","success");
    var form = this;
    setTimeout(function () {
        form.submit();
    }, 2000);
}