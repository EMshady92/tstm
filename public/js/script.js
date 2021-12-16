//FUNCION PARA INACTIVAR REGISTROS// AUX ES LA RUTA QUE RECIBE
function inactivar(id, aux) {
    Swal.fire({
        title: 'Estás seguro?',
        text: "Se inactivará el registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, inactivar!'
    }).then((result) => {
        if (result.isConfirmed) {
            // var route = ruta_global + "/" + aux + "/" + id + "";
            var token = $("#token").val();
            $.ajax({
                url: "/" + aux + "/" + id + "",
                headers: { 'X-CSRF-TOKEN': token },
                type: 'post',
                method: 'DELETE',
                dataType: 'json',
                success: function () {
                    Swal.fire(
                        'Inactivado!',
                        'El registro se ha inactivado.',
                        'success'
                    )
                }
            });

            setTimeout(function () { location.reload() }, 1000);

            //location.reload();
        }
    })
}

///guardar usuario
function guardar_usuario() {

    var dataString = $('#formulario').serialize(); // carga todos
    $.ajax({
        type: "POST",
        method: 'post',
        url: "/guardar_usuario",
        data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Se ha registrado el usuario: '+data.user.nombre+' correctamente',
                'success'
            )
        }

    });
    setTimeout(function () { location.reload() }, 1000);

}

///editar usuario
function editar_usuario($id) {
    var dataString = $('#edit_users').serialize(); // carga todos
    var nombre = document.getElementById('nombre').value;
    var usuario = document.getElementById('usuario').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    console.log(nombre);
    $.ajax({
        type: "POST",
        method: 'post',
        url: "/actualiza_user"+"/"+$id,
        data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Se ha registrado el usuario: '+data.user.nombre+' correctamente',
                'success'
            )
        }

    });
   // setTimeout(function () { location.reload() }, 1000);

}
