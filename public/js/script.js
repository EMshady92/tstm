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
        document.getElementById('display_aleacion_crud').style.display = "none"
        document.getElementById('display_elementos_lista').style.display = "none"
        document.getElementById('display_nueva_lista_calidad').style.display = "none"
        document.getElementById('tabla_composiciones').style.display = "none";
    } else if(value == "ELEMENTOS"){
        document.getElementById('display_clientes').style.display = "block"
        document.getElementById('display_elementos').style.display = "none"
        document.getElementById('display_aleaciones').style.display = "none"
        document.getElementById('display_aleacion_crud').style.display = "none"
        document.getElementById('tabla_composiciones').style.display = "none";
    }else if(value == "ALEACIONES"){
        document.getElementById('display_aleaciones').style.display = "block"
        document.getElementById('display_clientes').style.display = "none"
        document.getElementById('display_elementos').style.display = "none"
        document.getElementById('display_elementos_lista').style.display = "none"
        document.getElementById('display_nueva_lista_calidad').style.display = "none"
        document.getElementById('tabla_composiciones').style.display = "none";
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

function muestra_aleaciones_elementos(value) {

    $.ajax({
        type: "get",
        method: 'get',
        url: "/traer_aleaciones/"+value,
        success: function (data) {
            $("#elementos_aleaciones").empty();
            $('#elementos_aleaciones').append(new Option("Seleccione una opción...", ""))
            select_aux = document.getElementById('elementos_aleaciones');
            data.aleaciones.forEach(aleacion => {
                option = document.createElement("option");
                option.text = aleacion.nombre;
                option.value = aleacion.id;
                select_aux.add(option, select_aux[0]);

            });
            document.getElementById('display_elementos_lista').style.display = "block"
            document.getElementById('title').innerHTML = data.cliente.nombre;
            document.getElementById('tabla_composiciones').style.display = "none";
            document.getElementById('display_nueva_lista_calidad').style.display = "none"

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
    document.getElementById('aleacion_id').value = id_aleacion;
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

function eliminar_aleacion(){
    id_aleacion = document.getElementById('aleaciones_list').value;
    inactivar(id_aleacion,'listas_aleaciones');
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

///guardar nuevo clliente
function editar_aleacion() {

    //var dataString = $('#formulario_nuevo_cliente').serialize(); // carga todos
    var nombre_aleacion = document.getElementById('aleacion_edit').value;
    var aleacion_id = document.getElementById('aleacion_id').value;
    console.log(aleacion_id);
    $.ajax({
        type: "GET",
        method: 'get',
        url: "/editar_aleacion/"+ nombre_aleacion +"/"+ aleacion_id,
        //data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Se ha editado el nombre de la aleación a: '+data.aleacion.nombre+' correctamente',
                'success'
            )

            select_aux1 = document.getElementById('aleaciones_list');
            $("#aleaciones_list").empty();
            data.aleaciones.forEach(aleacion => {
                option = document.createElement("option");
                option.text = aleacion.nombre;
                option.value = aleacion.id;
                select_aux1.add(option, select_aux1[0]);
            });//END FOR EACH


            $("#modal_editar_aleacion .close").click();
            $('.modal_editar_aleacion.in').modal('hide');


        }

    });
    //$('#display_elementos').load('#display_elementos');


}

function validar_aleacion(value){
    $.ajax({
        type: "get",
        method: 'get',
        url: "/validar_aleacion/"+value,
        success: function (data) {

            if(data.aleaciones.length > 0){
                document.getElementById('display_nueva_lista_calidad').style.display = "none";

                var arreglo = data.aleaciones;

                    $("#tbody td").remove();
                //generar tabla de compuestos
                    for(var x = 0; x < arreglo.length; x++){
                        var todo = '<tr>';
                        todo+='<td>'+arreglo[x].nombre_composicion+'</td>';
                        todo+='<td><input id="'+arreglo[x].id+'" type=number onchange="cambia_rango_1(this.value,this.id)" value = "'+arreglo[x].rango_1+'"></td>';
                        todo+='<td><input type=number id="'+arreglo[x].id+'" onchange="cambia_rango_2(this.value,this.id)" value = "'+arreglo[x].rango_2+'"></td>';
                        todo+='<td><button type="button" id="'+arreglo[x].id+'" onclick=eliminar_compuesto(this.id); class="btn btn-danger mt-3">Eliminar</button></td></tr>';
                        console.log(todo);
                        $('#tbody').append(todo);
                    }
                document.getElementById('tabla_composiciones').style.display = "block";

            }else{
                document.getElementById('display_nueva_lista_calidad').style.display = "block"
                document.getElementById('tabla_composiciones').style.display = "none";
               // let inputValue1 = document.querySelector("#aleacion_title").value;
            }
           /*  document.getElementById('display_elementos_lista').style.display = "block"
            document.getElementById('title').innerHTML = data.cliente.nombre; */

        },
        error : function(data) {

        },
    });
}

function guardar_compuestos(){
  /*   $SI=""; $FE=""; $CU=""; $MN=""; $MG=""; $CR="";$NI=""; $ZN="";$TI=""; $BI="";$CA="";$CD="";$LI="";$NA="";$P=""; $PB="";$SB=""; $SN="";  $AL=""; */
    var compuestos = [];
  if ($('#SI').prop('checked')){
    var SI = $('#SI').val();
    compuestos.push(SI);
  }

  if ($('#FE').prop('checked')){
    var FE = $('#FE').val();
    compuestos.push(FE);
  }

  if ($('#CU').prop('checked')){
    var CU = $('#CU').val();
    compuestos.push(CU);
  }

  if ($('#MN').prop('checked')){
    var MN = $('#MN').val();
    compuestos.push(MN);
  }

  if ($('#MG').prop('checked')){
    var MG = $('#MG').val();
    compuestos.push(MG);
  }

  if ($('#CR').prop('checked')){
    var CR = $('#CR').val();
    compuestos.push(CR);
  }

  if ($('#NI').prop('checked')){
    var NI = $('#NI').val();
    compuestos.push(NI);
  }

  if ($('#ZN').prop('checked')){
    var ZN = $('#ZN').val();
    compuestos.push(ZN);
  }

  if ($('#TI').prop('checked')){
    var TI = $('#TI').val();
    compuestos.push(TI);
  }

  if ($('#BI').prop('checked')){
    var BI = $('#BI').val();
    compuestos.push(BI);
  }

  if ($('#CA').prop('checked')){
    var CA = $('#CA').val();
    compuestos.push(CA);
  }

  if ($('#CD').prop('checked')){
    var CD = $('#CD').val();
    compuestos.push(CD);
  }

  if ($('#LI').prop('checked')){
    var LI = $('#LI').val();
    compuestos.push(LI);
  }

  if ($('#NA').prop('checked')){
    var NA = $('#NA').val();
    compuestos.push(NA);
  }

  if ($('#P').prop('checked')){
    var P = $('#P').val();
    compuestos.push(P);
  }

  if ($('#PB').prop('checked')){
    var PB = $('#PB').val();
    compuestos.push(PB);
  }

  if ($('#SB').prop('checked')){
    var SB = $('#SB').val();
    compuestos.push(SB);
  }

  if ($('#SN').prop('checked')){
    var SN = $('#SN').val();
    compuestos.push(SN);
  }

  if ($('#AL').prop('checked')){
    var AL = $('#AL').val();
    compuestos.push(AL);
  }
  var id_aleacion = $('#elementos_aleaciones').val();
/* alert(id_aleacion);
console.log(compuestos); */

    document.getElementById('compuestos').value = compuestos;
var token = $("#token").val();

dataString = $('#form_compuestos').serialize();
$.ajax({
    headers: {
        'X-CSRF-TOKEN': token
    },
    method: 'POST',
    dataType: 'json',
    data:dataString,//capturo array
    url: "/guardar_compuestos/"+ id_aleacion,

    //data: dataString,
    success: function (data) {
        var arreglo = data.listas_calidad;
        console.log(arreglo.length);
        $("#tbody td").remove();
     //generar tabla de compuestos
        for(var x = 0; x < arreglo.length; x++){
            var todo = '<tr>';
            todo+='<td>'+arreglo[x].nombre_composicion+'</td>';
            todo+='<td><input id="'+arreglo[x].id+'" type=number onchange="cambia_rango_1(this.value,this.id)" value = "'+arreglo[x].rango_1+'"></td>';
            todo+='<td><input type=number id="'+arreglo[x].id+'" onchange="cambia_rango_2(this.value,this.id)" value = "'+arreglo[x].rango_2+'"></td>';
            todo+='<td><button type="button" id="'+arreglo[x].id+'" onclick=eliminar_compuesto(this.id); class="btn btn-danger mt-3">Eliminar</button></td></tr>';
            console.log(todo);
            $('#tbody').append(todo);
        }


         $("#modal_compuestos_calidad .close").click();
         $('.modal_compuestos_calidad.in').modal('hide');
         document.getElementById('display_nueva_lista_calidad').style.display = "none"
         document.getElementById('tabla_composiciones').style.display = "block"



    }

});

}

function cambia_rango_1(value,id){
    $.ajax({
        type: "get",
        method: 'get',
        url: "/cambia_rango_1/"+value+"/"+id,
        success: function (data) {

        },
        error : function(data) {

        },
    });
    console.log(value);
    console.log(id);
}

function cambia_rango_2(value,id){
    $.ajax({
        type: "get",
        method: 'get',
        url: "/cambia_rango_2/"+value+"/"+id,
        success: function (data) {




        },
        error : function(data) {

        },
    });
    console.log(value);
    console.log(id);
}

function eliminar_compuesto(id){
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
                url: "/inactiva_compuesto/"+id,
                type: 'GET',
                method: 'get',
                success: function (data) {
                    Swal.fire(
                        'Inactivado!',
                        'El registro se ha inactivado.',
                        'success'
                    )
                    $("#tbody td").remove();
                    var arreglo = data.listas_calidad;

                 //generar tabla de compuestos
                    for(var x = 0; x < arreglo.length; x++){
                        var todo = '<tr>';
                        todo+='<td>'+arreglo[x].nombre_composicion+'</td>';
                        todo+='<td><input id="'+arreglo[x].id+'" type=number onchange="cambia_rango_1(this.value,this.id)" value = "'+arreglo[x].rango_1+'"></td>';
                        todo+='<td><input type=number id="'+arreglo[x].id+'" onchange="cambia_rango_2(this.value,this.id)" value = "'+arreglo[x].rango_2+'"></td>';
                        todo+='<td><button type="button" id="'+arreglo[x].id+'" onclick=eliminar_compuesto(this.id); class="btn btn-danger mt-3">Eliminar</button></td></tr>';
                        console.log(todo);
                        $('#tbody').append(todo);
                    }

                }
            });

            //setTimeout(function () { location.reload() }, 1000);

            //location.reload();
            //document.getElementById('display_nueva_lista_calidad').style.display = "none"
            document.getElementById('tabla_composiciones').style.display = "block"
        }
    })
}
//////////////listas calidad

/////////////Nueva programcion///////////////////////////////

function mostrar_programacion(value) {

    if (value == "COMPRA") {
        document.getElementById('display_compras').style.display = "block";
        document.getElementById('display_ventas').style.display = "none";

    } else if(value == "VENTA"){
        document.getElementById('display_compras').style.display = "none";
        document.getElementById('display_ventas').style.display = "block";
    }
}

function guardar_nueva_compra() {

    var dataString = $('#formulario_compra').serialize(); // carga todos
    var token = $("#_token").val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        type: "POST",
        method: 'post',
        url: "/guardar_nueva_compra",
        data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Compra guardada con exito',
                'success'
            )
        }

    });
    //setTimeout(function () { location.reload() }, 1000);

}

function guardar_nueva_venta() {

    var dataString = $('#formulario_venta').serialize(); // carga todos
    var token = $("#_token").val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        type: "POST",
        method: 'post',
        url: "/guardar_nueva_venta",
        data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Venta guardada con exito',
                'success'
            )
        }

    });
    //setTimeout(function () { location.reload() }, 1000);

}

function tipo_registro_venta(value) {

    if (value == "LAYOUT") {
        document.getElementById('formulario_layout_venta').style.display = "block"
        document.getElementById('formulario_manual_venta').style.display = "none"
    } else if(value == "MANUAL"){
        document.getElementById('formulario_layout_venta').style.display = "none"
        document.getElementById('formulario_manual_venta').style.display = "block"

    }

}



function tipo_registro_compra(value) {

    if (value == "LAYOUT") {
        document.getElementById('formulario_layout_compra').style.display = "block"
        document.getElementById('formulario_manual_compra').style.display = "none"
    } else if(value == "MANUAL"){
        document.getElementById('formulario_layout_compra').style.display = "none"
        document.getElementById('formulario_manual_compra').style.display = "block"

    }

}


function guardar_nueva_compra_excel() {

    var dataString = $('#formulario_compra').serialize(); // carga todos
    var token = $("#_token").val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        type: "POST",
        method: 'post',
        url: "/guardar_nueva_compra_excel",
        data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Venta guardada con exito',
                'success'
            )
        }

    });
    //setTimeout(function () { location.reload() }, 1000);

}

function submit(value){
    var form = document.getElementById(value);
    form.submit();
   }

/* EDITAR COMPRAS  */
function traer_compras_dates(fecha){
    var token = $("#token").val();
    var filtro = $("#filtro").val();
    console.log(fecha);
    $.ajax({
        type: "GET",
        method: 'get',
        url: "/traer_compras_dates/"+ fecha +"/"+ filtro,

        //data: dataString,
        success: function (data) {
            var arreglo = data.compras;
            console.log(arreglo.length);
            $("#tbody td").remove();
         //generar tabla de compuestos
            for(var x = 0; x < arreglo.length; x++){
                var todo = '<tr>';
                todo+='<td>'+arreglo[x].po+'</td>';
                todo+='<td>'+arreglo[x].supplier+'</td>';
                todo+='<td>'+arreglo[x].material+'</td>';
                todo+='<td>'+arreglo[x].lot+'</td>';
                todo+='<td>'+arreglo[x].supplier_weight+'</td>';
                todo+='<td>'+arreglo[x].reception_date+'</td>';
                todo+='<td><button type="button" id="'+arreglo[x].id+'" onclick=eliminar_compuesto(this.id); class="btn btn-danger mt-3">Eliminar</button></td>';
                todo+='<td><button type="button" id="'+arreglo[x].id+'_editar" onclick="datos_modal_edit(this.id)" data-toggle="modal" data-target="#modal_editar_compra" data-dismiss="modal" class="btn btn-success mt-3">Editar</button></td></tr>';

                $('#tbody').append(todo);
            }

        }

    });
}

function datos_modal_edit(id){
    $.ajax({
        type: "GET",
        method: 'get',
        url: "/traer_datos_edit_compra/"+ id,

        //data: dataString,
        success: function (data) {
            console.log(data);
            document.getElementById("id").value = data.compra.id;
            document.getElementById("reception_date").value = data.compra.reception_date;
            document.getElementById("po").value = data.compra.po;
            document.getElementById("year").value = data.compra.year;
            document.getElementById("month").value = data.compra.month;
            document.getElementById("supplier").value = data.compra.supplier;
            document.getElementById("material").value = data.compra.material;
            document.getElementById("lot").value = data.compra.lot;
            document.getElementById("supplier_weight").value = data.compra.supplier_weight;
            document.getElementById("observaciones").value = data.compra.observaciones;
            document.getElementById("importacion").value = data.compra.importacion;

         //generar tabla de compuestos


        }

    });

}

function editar_compra() {
    var dataString = $('#formulario_edit_compra').serialize(); // carga todos

    var token = $("#_token").val();
    console.log(token);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        type: "POST",
        method: 'post',
        url: "/editar_compra",
        data: dataString,
        success: function (data) {

            Swal.fire(
                'Exito!',
                'Se ha editado el registro',
                'success'
            )

            $("#modal_editar_compra .close").click();
            $('.modal_editar_compra.in').modal('hide');
        }

    });
    setTimeout(function () { location.reload() }, 1000);

}
/* EDITAR COMPRAS */
