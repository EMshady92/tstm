<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                     <label for="monto_ingreso">Nombre:</label>
                <input type="text" class="form-control" id="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" v-model="articulo.nombre">

                <label for="fecha_ingreso">Usuario:</label>
                <input type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" id="user_e" placeholder="" value="">

                        <label for="correo_e">Correo:</label>
                        <input type="text" class="form-control"  id="correo_e"  value="">

                <label for="concepto_ingreso">Contraseña:</label>
                <input type="password" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" id="pass_e" placeholder="">

                <label for="concepto_ingreso">Repetir contraseña:</label>
                <input type="password" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" id="pass2_e" placeholder="">
                <br>
                <h4>Permisos</h4>

                <div class="row">
                  <div class="col-sm-5">
                    <h5>Compras</h5>
                  </div>
                  <div class="col-sm-5 col-sm-offset-2">
                    <h5>Recibo</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1">
                    <input id="check1_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="check1_e">Nueva programación:</label>
                  </div>
                  <div class="col-sm-1 col-sm-offset-2">
                    <input id="check4_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="check4_e">Dashboard:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1">
                    <input id="check2_e" type="checkbox" class=""/><br>
                  </div>
                  <div class="col-sm-4">
                    <label for="check2_e">Editar programación:</label>
                  </div>
                  <div class="col-sm-1 col-sm-offset-2">
                    <input id="check5_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="check5_e">Programación diaria:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1">
                    <input id="check3_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4">
                    <label for="check3_e">Reportes:</label>
                  </div>
                  <div class="col-sm-1 col-sm-offset-2">
                    <input id="check6_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="check6_e">Recepción:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1 col-sm-offset-7">
                    <input id="check7_e" type="checkbox" class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="check7_e">Reportes:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1 col-sm-offset-7">
                    <input id="bypro_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="bypro_e">Cal-Sal / By pro:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1 col-sm-offset-7">
                    <input id="AMX_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="AMX_e">TARA AMX:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1 col-sm-offset-7">
                    <input id="EP" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="EP">Editar registros:</label>
                  </div>
                </div>
                 <div class="row">
                          <div class="col-sm-5">
                            <h5>Materiales</h5>
                          </div>
                          <div class="col-sm-5 col-sm-offset-2">
                            <h5>Calidad</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-1">
                            <input id="e_traslado_bin" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_traslado_bin">Traslado de bin:</label>
                          </div>
                          <div class="col-sm-1 col-sm-offset-2">
                            <input id="e_nuevo_lote" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_nuevo_lote">Nuevo lote:</label>
                          </div>


                        </div>
                        <div class="row">
                          <div class="col-sm-1">
                            <input id="e_retiro_material" type="checkbox"  class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_retiro_material">Retiro de material:</label>
                          </div>
                          <div class="col-sm-1 col-sm-offset-2">
                            <input id="e_lotes_enviados" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_lotes_enviados">Lotes enviados:</label>
                          </div>

                        </div>
                       <div class="row">
                          <div class="col-sm-1">
                            <input id="e_historial_bin" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_historial_bin">Historial de bin:</label>
                          </div>

                           <div class="col-sm-1 col-sm-offset-2">
                            <input id="e_envio_ollas" type="checkbox"  class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_envio_ollas">Envio de ollas:</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-1">
                            <input id="e_historial_lote" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_historial_lote">Historial lote:</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-1">
                            <input id="e_movimientos" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_movimientos">Movimientos:</label>
                          </div>
                        </div>
                       <div class="row">
                          <div class="col-sm-1">
                            <input id="e_reportes" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_reportes">Reportes:</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-1">
                            <input id="e_board_materiales" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_board_materiales">Board materiales:</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-1">
                            <input id="e_board_mat_h" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_board_mat_h">Board materiales historial:</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-1">
                            <input id="e_layout_bines" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="e_layout_bines">Layout general bines:</label>
                          </div>
                        </div>
                <br>
                <div class="row">
                  <div class="col-sm-5">
                    <h5>Envío</h5>
                  </div>
                  <div class="col-sm-5 col-sm-offset-2">
                    <h5>Configuración</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1">
                    <input id="check8_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="check8_e">Subir layout envíos:</label>
                  </div>
                  <div class="col-sm-1 col-sm-offset-2">
                    <input id="check12_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4" style="margin:0;">
                    <label for="check12_e">Usuarios:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-1">
                    <input id="check9_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4">
                    <label for="check9_e">Dashboard:</label>
                  </div>
                  <div class="col-sm-1 col-sm-offset-2">
                            <input id="check13_e" type="checkbox" class=""/><br>
                          </div>
                          <div class="col-sm-4" style="margin:0;">
                            <label for="check13_e">Catálogos:</label>
                          </div>

                </div>
                <div class="row">
                <div class="col-sm-1 col-sm-offset-7">
                    <input id="e_kiosko1" type="checkbox" class=""/><br>
                  </div>
                  <div class="col-sm-4">
                    <label for="e_kiosko1">Kiosko 1:</label>
                  </div>
                  <div class="col-sm-1">
                    <input id="check10_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4">
                    <label for="check10_e">Reportes:</label>
                  </div>

                </div>
                <div class="row">
                  <div class="col-sm-1">
                    <input id="check11_e" type="checkbox"  class=""/><br>
                  </div>
                  <div class="col-sm-4">
                    <label for="check11_e">Configuración:</label>
                  </div>
                </div>

                <div class="form-group text-right mb-0">
                    <button class="btn btn-success waves-effect waves-light mr-1" onclick="submit();" id="submit"  type="submit">
                        Guardar
                    </button>
                    <button type="reset" data-dismiss="modal" class="btn btn-danger waves-effect">
                        Cancelar
                    </button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                articulo:{
                    nombre:'primer nombre',
                }
            }
        },

    }
</script>

<style>

</style>
