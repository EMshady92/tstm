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
//////////////////Listas calidad
function mostrar_opciones_listas_calidad(value) {

    if (value == "CLIENTE") {
        document.getElementById('display_elementos').style.display = "block"
        document.getElementById('display_clientes').style.display = "none"
        document.getElementById('display_aleaciones').style.display = "none"
    } else if(value == "ELEMENTOS"){
        document.getElementById('display_clientes').style.display = "block"
        document.getElementById('display_elementos').style.display = "none"
        document.getElementById('display_aleaciones').style.display = "none"

    }else if(value == "ALEACIONES"){
        document.getElementById('display_clientes').style.display = "none"
        document.getElementById('display_elementos').style.display = "none"
        document.getElementById('display_aleaciones').style.display = "block"
    }



}

function muestra_aleaciones(value) {

    $.ajax({
        type: "get",
        method: 'get',
        url: "/traer_aleaciones/"+value,
        success: function (data) {
            $("#aleaciones_list").empty();
            $('#aleaciones_list').append(new Option("Seleccione una opción...", ""))
            select_aux = document.getElementById('aleaciones_list');
            data.aleaciones.forEach(aleacion => {
                option = document.createElement("option");
                option.text = aleacion.nombre;
                option.value = aleacion.id;
                select_aux.add(option, select_aux[0]);

            });
            document.getElementById('display_aleacion_crud').style.display = "block"
            document.getElementById('title').innerHTML = data.cliente.nombre;

        }
    });

}

///guardar nuevo clliente
function guardar_nuevo_cliente() {

    var dataString = $('#formulario_nuevo_cliente').serialize(); // carga todos
    var nombre_cliente = document.getElementById('cliente').value;
    $.ajax({
        type: "GET",
        method: 'get',
        url: "/guardar_nuevo_cliente" +"/"+ nombre_cliente,
        data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Se ha registrado el usuario: '+data.cliente.nombre+' correctamente',
                'success'
            )


            var x = $('#clientes');
            option = new Option(data.cliente.nombre, data.cliente.id, true, true);
            x.append(option).trigger('change');
            x.trigger({
                type: 'select2:select',
                params: {
                    data: data
                }
            });
            $("#modal_nuevo_cliente .close").click();
            $('.modal_nuevo_cliente.in').modal('hide');


        }

    });


}

function mandar_valor_editar_modal(value){
    var cliente = value.options[value.selectedIndex].text;
    var id_cliente =  document.getElementById('clientes').value
    console.log(id_cliente);
    document.getElementById('cliente_edit').value = cliente;
    document.getElementById('cliente_id').value = id_cliente;
}

function mandar_valor_editar_modal_aleacion(value){
    var aleacion = value.options[value.selectedIndex].text;
    var id_aleacion =  document.getElementById('aleaciones_list').value
    console.log(id_aleacion);
    document.getElementById('aleacion_edit').value = aleacion;
    document.getElementById('cliente_id').value = id_aleacion;
}


///guardar nuevo clliente
function editar_cliente() {

    //var dataString = $('#formulario_nuevo_cliente').serialize(); // carga todos
    var nombre_cliente = document.getElementById('cliente_edit').value;
    var id_cliente = document.getElementById('cliente_id').value;
    $.ajax({
        type: "GET",
        method: 'get',
        url: "/editar_cliente/"+ nombre_cliente +"/"+ id_cliente,
        //data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Se ha editado el nombre del ciente a: '+data.cliente.nombre+' correctamente',
                'success'
            )

            select_aux1 = document.getElementById('clientes');
            $("#clientes").empty();
            data.clientes.forEach(cliente => {
                option = document.createElement("option");
                option.text = cliente.nombre;
                option.value = cliente.id;
                select_aux1.add(option, select_aux1[0]);
            });//END FOR EACH


            $("#modal_editar_cliente .close").click();
            $('.modal_editar_cliente.in').modal('hide');


        }

    });
    //$('#display_elementos').load('#display_elementos');


}

function limpia_input_nuevo_cliente(value){
    document.getElementById(value).value = "";
}


function eliminar_cliente(){
      id_cliente = document.getElementById('clientes').value;
      inactivar(id_cliente,'listas_cliente');
}

///guardar nuevo clliente
function guardar_nueva_aleacion() {


    var nombre_aleacion= document.getElementById('aleacion').value;
    var id_cliente= document.getElementById('lista_clientes_aleaciones').value;

    $.ajax({
        type: "GET",
        method: 'get',
        url: "/guardar_nueva_aleacion" +"/"+ nombre_aleacion +"/"+ id_cliente,

        success: function (data) {

            Swal.fire(
                'Exito!',
                'Aleación: '+data.aleacion.nombre+' registrada correctamente',
                'success'
            )


            var x = $('#aleaciones_list');
            option = new Option(data.aleacion.nombre, data.aleacion.id, true, true);
            x.append(option).trigger('change');
            x.trigger({
                type: 'select2:select',
                params: {
                    data: data
                }
            });
            $("#modal_nueva_aleacion .close").click();
            $('.modal_nueva_aleacion.in').modal('hide');


        }

    });


}
//////////////listas calidad


