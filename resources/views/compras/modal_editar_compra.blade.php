<div class="modal fade bs-example-modal-xl" id="modal_editar_compra" name="modal_editar_compra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              <form method="POST" onsubmit="editar_compra();" name="formulario_edit_compra"
                id="formulario_edit_compra">
                @csrf

                <div class="form-group" >
                    <label for="AcuerdoName">Id<span class="text-danger">*</span></label>
                    <input type="text" name="id"  parsley-trigger="change" required
                   class="form-control" id="id">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">RECEPTION DATE<span class="text-danger">*</span></label>
                    <input type="text" name="reception_date"  parsley-trigger="change" required
                   class="form-control" id="reception_date">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">PO<span class="text-danger">*</span></label>
                    <input type="text" name="po"  parsley-trigger="change" required
                   class="form-control" id="po">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">YEAR<span class="text-danger">*</span></label>
                    <input type="text" name="year"  parsley-trigger="change" required
                   class="form-control" id="year">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">MONTH<span class="text-danger">*</span></label>
                    <input type="text" name="month"  parsley-trigger="change" required
                   class="form-control" id="month">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">SUPPLIER<span class="text-danger">*</span></label>
                    <input type="text" name="supplier"  parsley-trigger="change" required
                   class="form-control" id="supplier">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">MATERIAL<span class="text-danger">*</span></label>
                    <input type="text" name="material"  parsley-trigger="change" required
                   class="form-control" id="material">
                </div>


                <div class="form-group" >
                    <label for="AcuerdoName">#LOT<span class="text-danger">*</span></label>
                    <input type="text" name="lot"  parsley-trigger="change" required
                   class="form-control" id="lot">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">SUPPLIER WEIGHT(Kg)<span class="text-danger">*</span></label>
                    <input type="text" name="supplier_weight"  parsley-trigger="change" required
                   class="form-control" id="supplier_weight">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">OBSERVACIONES<span class="text-danger">*</span></label>
                    <input type="text" name="observaciones"  parsley-trigger="change" required
                   class="form-control" id="observaciones">
                </div>

                <div class="form-group" >
                    <label for="AcuerdoName">IMPORTACIÓN<span class="text-danger">*</span></label>
                    <input type="text" name="importacion"  parsley-trigger="change" required
                   class="form-control" id="importacion">
                </div>

                    <div class="form-group text-right mb-0">
                        <button class="btn btn-success waves-effect waves-light mr-1" onclick="editar_compra();" id="submit_linea"
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
