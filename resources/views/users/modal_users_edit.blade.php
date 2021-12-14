@inject('modal_edit_users','App\Http\Controllers\UsersController')
<div class="modal fade bs-example-modal-xl" id="modal_users_edit{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
              {{--  <create_users_component></create_users_component> --}}
              <form name="edit_users" id="edit_users">
                @csrf


                <div>


                    <div class="form-group">
                        <label for="nombre">Nombre<span class="text-danger">*</span></label>
                        <input type="text" name="nombre"
                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                            maxlength="100" minlength="1"
                            parsley-trigger="change" required value="{{$user->nombre}}"
                            class="form-control" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="userName">Usuario<span class="text-danger">*</span></label>
                        <input type="text" name="usuario"
                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                            maxlength="100" minlength="1"
                            parsley-trigger="change" required value="{{$user->usuario}}"
                            class="form-control" id="usuario">
                    </div>

                    <div class="form-group">
                        <label for="userName">Correo<span class="text-danger">*</span></label>
                        <input type="email" name="email"
                            parsley-trigger="change" required value="{{$user->email}}"
                            class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="userName">Contraseña<span class="text-danger">*</span></label>
                        <input type="password" name="password"

                           minlength="6"
                            parsley-trigger="change"  placeholder="Ingresar contraseña"
                            class="form-control" id="password">
                    </div>

                    <div class="form-group">
                        <label for="userName">Confirmar Contraseña<span class="text-danger">*</span></label>
                        <input type="password" name="conf_pass"

                            maxlength="100" minlength="1"
                            parsley-trigger="change"  placeholder="Confirmar contraseña"
                            class="form-control" id="conf_pass">
                    </div>



                    <div class="form-group text-right mb-0">
                        <button class="btn btn-success waves-effect waves-light mr-1" onclick="editar_usuario('{{$user->id}}');" id="submit_linea"
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
