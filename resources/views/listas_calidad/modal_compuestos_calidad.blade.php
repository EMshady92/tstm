<div class="modal fade bs-example-modal-xl" id="modal_compuestos_calidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva composición</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

           {{--  <div class="modal-body">

                <form method="POST"  name="formulario_nuevo_cliente"
                    id="formulario_nuevo_cliente">
                    {{csrf_field()}}


                </form>
            </div> --}}

            <div class="modal-body" id="cuerpo_modal_calidad">
                <style>
                .C{
                 width:100%;


                }
                .div1{
                width:100%;

                }
                .div2{
                width:100%;

                }
                .mm{
                        margin-top: 1%;
                }
                </style>
            <div style=" width:100%;">
            <div style="display:inline-flex">


            </div>
            <form id="form_compuestos" action="">
                @csrf
            <div class=" C">
            <div class="div1">
             <h4 align="center" style="margin-bottom: 20px;">Selecciona los elementos</h4>
             <div class="row" style="    margin: 0px auto; width: 59%;">
                             <div class="col-sm-1">
                                            <input id="SI" value="SI" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="SI">SI</label>
                              </div>

                              <div class="col-sm-1 col-sm-offset-2">
                                <input id="FE" value="FE" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="FE">FE</label>
                              </div>

                              <div class="col-sm-1">
                                <input id="CU" value="CU" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="CU">CU</label>
                              </div>

                                <div class="col-sm-1 col-sm-offset-2">
                                <input id="MN" value="MN" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="MN">MN</label>
                              </div>

                                <div class="col-sm-1">
                                <input id="MG" value="MG" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="MG">MG</label>
                              </div>

                                <div class="col-sm-1 col-sm-offset-2">
                                <input id="CR" value="CR" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="CR">CR</label>
                              </div>

                              <div class="col-sm-1">
                                <input id="NI" value="NI" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="NI">NI</label>
                              </div>

                              <div class="col-sm-1 col-sm-offset-2">
                                <input id="ZN" value="ZN" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="ZN">ZN</label>
                              </div>

                                <div class="col-sm-1">
                                <input id="TI"  value="TI" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="TI">TI</label>
                              </div>


                                <div class="col-sm-1 col-sm-offset-2">
                                <input id="BI" value="BI" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="BI">BI</label>
                              </div>

                                                    <div class="col-sm-1">
                                <input id="CA" value="CA" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="CA">CA</label>
                              </div>

                                            <div class="col-sm-1 col-sm-offset-2">
                                <input id="CD" value="CD" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="CD">CD</label>
                              </div>

                                 <div class="col-sm-1">
                                <input id="LI" value="LI" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="LI">LI</label>
                              </div>

                               <div class="col-sm-1 col-sm-offset-2">
                                <input id="NA" value="NA" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="NA">NA</label>
                              </div>

                               <div class="col-sm-1">
                                <input id="P" value="P"  type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="P">P</label>
                              </div>

                               <div class="col-sm-1 col-sm-offset-2">
                                <input id="PB" value="PB"  type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="PB">PB</label>
                              </div>

                               <div class="col-sm-1">
                                <input id="SB" value="SB" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="SB">SB</label>
                              </div>

                               <div class="col-sm-1 col-sm-offset-2">
                                <input id="SN" value="SN" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="SN">SN</label>
                              </div>

                               <div class="col-sm-1">
                                <input id="AL" value="AL" type="checkbox" class=""><br>
                              </div>
                              <div class="col-sm-4" style="margin:0;">
                                <label for="AL">AL</label>
                              </div>
                    </div>
                </div>
                <input id="compuestos" name="compuestos[]" type="hidden">
            </div>
        <div id="campos" style="color:red;"></div><br>
        <button class="btn btn-success" Type="button" onclick="guardar_compuestos();" style="float:right;">Guardar</button>
    </form>

            </div></div>


        </div>
    </div>
</div>
