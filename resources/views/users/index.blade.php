@extends('layouts.principal')
@section('content')
<!-- Start Content-->
@include('users.modal_users_create')

 <div id="inicio">
    <div class="row">
        <div class="col-md-12">
            <div class="widget p-md" style="align-content: center;">

                <div style=";margin: 0px;">
                    <div class="row justify-content-center" style="padding:0;margin-top: 1em;">
                        <div class="col-md-6 col-sm-3 input-group" style="padding:2em; color: black;">
                            <h5>Configuración</h5>
                            <p>Agregar, eliminar y editar usuarios del sistema</p>
                            <button type="button"
                            class="btn btn-success waves-effect waves-light btn-success btn-sm"
                            data-toggle="modal"

                          data-target="#modal"
                            data-dismiss="modal" role="button">
                            <i class="mdi mdi-plus-box"></i>Nuevo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="widget p-md" style="align-content: center;">
                <div style="width: 100%;margin: 0px;">

                    <div class="row justify-content-center" style="padding:3em;" id="datos_tabla">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-12 align-self-start table-responsive" style="color: black;font-size:14px;" id="table_users">
                            <table data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%" id="LOL" style="font-family:Helvetica Neue, Helvetica,Arial,sans-serif;">
                                <thead >
                                    <tr>
                                    <th>NOMBRE</th>
                                    <th>USUARIO</th>
                                    <th>EMAIL</th>
                                    <th>ESTADO</th>
                                    <th>EDITAR</th>
                                    <th>INCATIVAR</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->usuario}}</td>
                                    <td>{{$user->email}}</td>
                                     <!--estado -->
                                     @if($user->estado == "ACTIVO")
                                    <td>
                                        <span class="badge badge-success">{{$user->estado}}</span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge badge-danger">{{$user->estado}}</span>
                                    </td>
                                    @endif
                                    <!--estado -->
                                    <td><button type="button"
                                        class="btn btn-success waves-effect waves-light btn-success btn-sm"
                                        data-toggle="modal" data-target="#modal_users_edit{{$user->id}}"
                                        data-dismiss="modal" role="button">
                                        <i class="zmdi zmdi-edit"></i></button>
                                    </td>

                                    <td>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                                        <a class="btn waves-effect waves-light btn-danger" onclick=inactivar('{{$user->id}}','users');
                                                 style="margin-right: 10px;" role="button"><i
                                                    class="zmdi zmdi-delete"></i></a>
                                    </td>

                                    </tr>
                                    @include('users.modal_users_edit')
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <script type="application/javascript">
 $("#LOL").DataTable();
</script>
@endsection
