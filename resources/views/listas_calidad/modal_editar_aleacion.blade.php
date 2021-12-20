<div class="modal fade bs-example-modal-xl" id="modal_editar_aleacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo elemento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
              {{--  <create_users_component></create_users_component> --}}
              <form method="POST" onsubmit="editar_aleacion();" name="formulario_nuevo_cliente"
                id="formulario_nuevo_cliente">
                {{csrf_field()}}

                <input autocapitalize="off" id="aleacion_edit" name="cliente_edit" class="swal2-input" placeholder="" type="text" style="display: flex;">
                <input style="display:none" autocapitalize="off" id="cliente_id" name="cliente_id" class="swal2-input" placeholder="" type="text" style="display: flex;">

                    <div class="form-group text-right mb-0">
                        <button class="btn btn-success waves-effect waves-light mr-1" onclick="editar_aleacion();" id="submit_linea"
                            type="button">
                            Guardar
                        </button>
                        <button data-dismiss="modal" class="btn btn-danger waves-effect">
                            Cancelar
                        </button>
                    </div>
                </div>
            </form>
        </div>


        </div>
    </div>
</div>
