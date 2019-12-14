var form = document.getElementById('agregarProductoForm');

form.onsubmit = EventoCarrito;

function EventoCarrito(ev){
    ev.preventDefault();
    swal("Elemento agregado al carrito!","Gracias por tu compra","success");
    var form = this;
    setTimeout(function () {
        form.submit();
    }, 2000);
}