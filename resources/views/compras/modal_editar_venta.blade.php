<div class="modal fade bs-example-modal-xl" id="modal_editar_venta" name="modal_editar_venta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              <form method="POST" onsubmit="editar_venta();" name="formulario_edit_venta"
                id="formulario_edit_venta">
                @csrf

                <div class="form-group" >
                    <label for="id_venta">Id<span class="text-danger">*</span></label>
                    <input type="text" name="id_venta"  parsley-trigger="change" required
                   class="form-control" id="id_venta">
                </div>

                <div class="form-group" >
                    <label for="orden">ORDEN<span class="text-danger">*</span></label>
                    <input type="text" name="orden"  parsley-trigger="change" required
                   class="form-control" id="orden">
                </div>

                <div class="form-group" >
                    <label for="year_venta">YEAR<span class="text-danger">*</span></label>
                    <input type="text" name="year_venta"  parsley-trigger="change" required
                   class="form-control" id="year_venta">
                </div>

                <div class="form-group" >
                    <label for="month_venta">MONTH<span class="text-danger">*</span></label>
                    <input type="text" name="month_venta"  parsley-trigger="change" required
                   class="form-control" id="month_venta">
                </div>

                <div class="form-group" >
                    <label for="cliente">CLIENTE<span class="text-danger">*</span></label>
                    <input type="text" name="cliente"  parsley-trigger="change" required
                   class="form-control" id="cliente">
                </div>

                <div class="form-group" >
                    <label for="material_venta">MATERIAL<span class="text-danger">*</span></label>
                    <input type="text" name="material_venta"  parsley-trigger="change" required
                   class="form-control" id="material_venta">
                </div>


                <div class="form-group" >
                    <label for="lote">LOTE<span class="text-danger">*</span></label>
                    <input type="text" name="lote"  parsley-trigger="change" required
                   class="form-control" id="lote">
                </div>

                <div class="form-group" >
                    <label for="c_lotes">C LOTES<span class="text-danger">*</span></label>
                    <input type="text" name="c_lotes"  parsley-trigger="change" required
                   class="form-control" id="c_lotes">
                </div>

                  <div class="form-group" >
                    <label for="p_list">PACKET LIST<span class="text-danger">*</span></label>
                    <input type="text" name="p_list"  parsley-trigger="change" required
                   class="form-control" id="p_list">
                </div>

                  <div class="form-group" >
                    <label for="fecha_envio">FECHA ENVIO<span class="text-danger">*</span></label>
                    <input type="date" name="fecha_envio"  parsley-trigger="change" required
                   class="form-control" id="fecha_envio">
                </div>

                 <div class="form-group" >
                    <label for="n_sellos">N SELLOS<span class="text-danger">*</span></label>
                    <input type="text" name="n_sellos"  parsley-trigger="change" required
                   class="form-control" id="n_sellos">
                </div>

                 <div class="form-group" >
                    <label for="n_cajas">N CAJAS<span class="text-danger">*</span></label>
                    <input type="text" name="n_cajas"  parsley-trigger="change" required
                   class="form-control" id="n_cajas">
                </div>

                <div class="form-group" >
                    <label for="observaciones_venta">OBSERVACIONES<span class="text-danger">*</span></label>
                    <input type="text" name="observaciones_venta"  parsley-trigger="change" required
                   class="form-control" id="observaciones_venta">
                </div>


                    <div class="form-group text-right mb-0">
                        <button class="btn btn-success waves-effect waves-light mr-1" onclick="editar_venta();" id="submit_linea"
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
