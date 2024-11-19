const formulariosAjax = document.querySelectorAll(".formularioAjax");

formulariosAjax.forEach(formulario => {
    formulario.addEventListener("submit", function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Está seguro?',
            text: "¡Quiere realizar la acción solicitada!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, realizar acción',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                //acción a ejecutar si se confirma
            }
        });
    });
});
