
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
                            <form action="{{url('/users', [$user->id])}}" id="editar_user" method="post" class="form-horizontal parsley-examples" enctype="multipart/form-data" accept-charset="UTF-8" >
                                    {{csrf_field()}}

                                    <input type="hidden" name="_method" value="PUT">




                                    <div class="form-group" >
                                            <label for="AcuerdoName">Nombre<span class="text-danger">*</span></label>
                                            <input type="text" name="nombre"  parsley-trigger="change" required onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                            value="{{$user->nombre}}" class="form-control" id="nombre">
                                    </div>


                                </div>




                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" onclick="submit();" id="submit" type="submit">
                                                Guardar
                                            </button>
                                            <button type="reset" onclick="location.href='/users'" class="btn btn-secondary waves-effect">
                                                Cancelar
                                            </button>
                                        </div>

                                    </form>
        </div>


        </div>
    </div>
</div>
<script>
    function submit(){
     var form = document.getElementById('editar_user');
     form.submit();
    }
</script>
