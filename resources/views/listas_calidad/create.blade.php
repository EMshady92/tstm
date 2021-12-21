@extends('layouts.principal')
@section('content')
<!-- Start Content-->
@include('listas_calidad.modal_nuevo_cliente')
@include('listas_calidad.modal_editar_cliente')
@include('listas_calidad.modal_nueva_aleacion')
@include('listas_calidad.modal_editar_aleacion')
@include('listas_calidad.modal_compuestos_calidad')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active"><a href="/listas">Listas calidad</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Listas calidad</h4>

                {{-- <a href="/listas/create" class="button-list">
                    <button type="button" class="btn btn-success waves-effect waves-light">
                        <span class="btn-label"><i class="mdi mdi-plus-box"></i>
                        </span>Registrar</button>
                </a> --}}
            </div>
        </div>
    </div>
    <!-- end page title -->

<hr>

                <form  id="formulario" method="POST">
                    @csrf



                        <div class="widget p-md col-md-12" style="align-content: center;">

                            <div style=";margin: 0px;">
                                <div class="row justify-content-center" style="padding:0;margin-top: 1em;">
                                    <div class="col-md-12  input-group" style="padding:2em; color: black;">
                                        <h4>Administrar listas desplegables</h4>
                                        <p>Seleccione el tipo de lista</p>
                                        <div class="form-group col-md-12">
                                                <br>
                                                <select class="form-control" onchange="mostrar_opciones_listas_calidad(this.value);" name="tipo" id="tipo" required
                                                data-toggle="">
                                                <option selected>Seleccione una opción</option>
                                                <option value="ALEACIONES">ALEACIONES</option>
                                                <option value="CLIENTE">CLIENTE</option>
                                                <option value="ELEMENTOS">ELEMENTOS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- elementos forms --}}
                    <div id="display_clientes" style="display: none;">
                            {{-- formualrio para elementos --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget p-md" style="align-content: center;">

                                    <div style=";margin: 0px;">
                                        <div class="row justify-content-center" style="padding:0;margin-top: 1em;">
                                            <div class="col-md-12  input-group" style="padding:2em; color: black;">
                                                <h4>Administrar listas desplegables</h4>
                                                <p>Seleccione el tipo de lista</p>
                                                <div class="form-group col-md-12">
                                                        <br>
                                                        <select id="lista"  class="form-control" onchange="muestra_aleaciones_elementos(this.value)">
                                                            <option selected value="">Seleccione una opción...</option>
                                                            @foreach ($listas_cliente as $cliente)
                                                            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12" style="margin-bottom:24px;" id="resultado">

                            </div>
                            <div class="col-md-12">

                            </div>
                        </div>

                    </div>

                <div id="display_elementos_lista" style="display: none;">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget p-md" style="align-content: center;">

                                <div style=";margin: 0px;">
                                    <div class="row justify-content-center" style="padding:0;margin-top: 1em;">
                                        <div class="col-md-12  input-group" style="padding:2em; color: black;">
                                            <h4>Aleaciones</h4>

                                            <div class="form-group col-md-12">
                                                    <br>
                                                    <select id="elementos_aleaciones" onchange="validar_aleacion(this.value);" class="form-control">
                                                        <option selected value="">Seleccione una opción...</option>

                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="widget p-md" id="display_nueva_lista_calidad" style="display:none;">
                    <div style="width: 100%;">

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-12 align-self-start table-responsive" style="color: black;font-size:14px;">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4></h4>

                                    </div>
                                </div>
                                <p class="">No se han encontrado compuestos de esta aleación</p>

                                            <div class="form-group col-md-3">
                                                <br>
                                                <button class="btn btn-info mt-3"  type="button" data-toggle="modal" data-target="#modal_compuestos_calidad"
                                                data-dismiss="modal" style="background:#001789;">Generar compuestos</button>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <br>

                                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- tabla --}}

        <div class="col-md-12" id="tabla_composiciones" style="display:none;">
            <div class="widget p-md" style="align-content: center;">
                <div style="width: 100%;margin: 0px;">

                    <div class="row justify-content-center" style="padding:3em;" id="datos_tabla">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-12 align-self-start table-responsive" style="color: black;font-size:14px;" id="table_users">
                            <table data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%" id="LOL" style="font-family:Helvetica Neue, Helvetica,Arial,sans-serif;">
                                <thead >
                                    <tr>
                                    <th>ELEMENTO</th>
                                    <th>MINIMO</th>
                                    <th>MAXIMO</th>
                                    <th>ELIMINAR</th>


                                    </tr>
                                </thead>
                                <tbody id="tbody">



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>






                {{-- tabla --}}

                     {{-- elementos forms --}}
                    <div id="display_elementos" class="widget p-md" style="display: none;">
                        <div class="col-md-10 col-md-offset-1 widget p-md col-sm-12 col-12 align-self-start table-responsive" style="color: black;font-size:14px;">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Cliente</h4>
                                </div>
                            </div>
                            <p class="">Seleccione un elemento</p>
                                        <div class="form-group col-md-6">
                                            <br>
                                            <select id="clientes" onchange="mandar_valor_editar_modal(this)" class="form-control">


                                                    <option selected value="">Seleccione una opción...</option>
                                                    @foreach ($listas_cliente as $cliente)
                                                    <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                                    @endforeach


                                            </select>

                                        </div>




                                        <div class="form-group col-md-6">
                                            <br>
                                            <button type="button" data-toggle="modal" data-target="#modal_nuevo_cliente"
                                            data-dismiss="modal" class="btn btn-info mt-3" onclick="limpia_input_nuevo_cliente('cliente');" style="background:#001789;">
                                            Nuevo elemento
                                            </button>

                                            <button type="button" data-toggle="modal" data-target="#modal_editar_cliente"
                                                data-dismiss="modal" class="btn btn-info mt-3" style="background:#001789;">
                                                Editar
                                            </button>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                                            <button type="button" class="btn btn-danger mt-3" onclick="eliminar_cliente();">Eliminar</button>


                                        </div>

                        </div>
                    </div>



                    <div id="display_aleaciones" style="display:none;">



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget p-md" style="align-content: center;">

                                        <div style=";margin: 0px;">
                                            <div class="row justify-content-center" style="padding:0;margin-top: 1em;">
                                                <div class="col-md-12  input-group" style="padding:2em; color: black;">
                                                    <h4>Administrar listas desplegables</h4>
                                                    <p>Seleccione el tipo de lista</p>
                                                    <div class="form-group col-md-12">
                                                            <br>
                                                            <select id="lista_clientes_aleaciones" class="form-control" onchange="muestra_aleaciones(this.value);">
                                                                <option selected value="">Seleccione una opción...</option>
                                                                @foreach ($listas_cliente as $cliente)
                                                                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                                                @endforeach
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>

                    <div id="display_aleacion_crud" style="display:none">

                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-12 align-self-start table-responsive widget p-md" style="color: black;font-size:14px;">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4 id="title">Administrar listas desplegables</h4>
                                    </div>
                                </div>
                                <p class="">Seleccione un aleación</p>
                                            <div class="form-group col-md-6">
                                                <br>
                                                <select id="aleaciones_list" onchange="mandar_valor_editar_modal_aleacion(this);" class="form-control">


                                                        <option selected value="">Seleccione una opción...</option>



                                                </select>

                                            </div>




                                            <div class="form-group col-md-6">
                                                <br>
                                                <button type="button" data-toggle="modal" data-target="#modal_nueva_aleacion"
                                                data-dismiss="modal" class="btn btn-info mt-3" style="background:#001789;"  onclick="limpia_input_nuevo_cliente('aleacion');">
                                                Nuevo
                                                </button>

                                                <button type="button" data-toggle="modal" data-target="#modal_editar_aleacion"
                                                    data-dismiss="modal" class="btn btn-info mt-3" style="background:#001789;">
                                                    Editar
                                                </button>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                                                <button type="button" class="btn btn-danger mt-3" onclick="eliminar_aleacion();">Eliminar</button>


                                            </div>
                                        </div>
                                    </div>




                    </div>






                {{--  <div class="form-group text-right mb-0">
                        <button class="btn btn-primary waves-effect waves-light mr-1" onclick="submit();" id="submit"  type="submit">
                            Guardar
                        </button>
                        <button type="reset" onclick="location.href='/listas'" class="btn btn-secondary waves-effect">
                            Cancelar
                        </button>
                    </div> --}}

                </form>


</div> <!-- end container-fluid -->
<script>

</script>
@endsection
