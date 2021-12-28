@extends('layouts.principal')
@section('content')
@include('compras.modal_editar_compra')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/editar_programacion">Editar programación</a></li>

                    </ol>
                </div>
                <h4 class="page-title">Editar programación</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <hr>
                            <!--select compra o venta-->
        <div style=";margin: 0px;">
            <div class="row justify-content-center" style="padding:0;margin-top: 1em;">
                <div class="col-md-6  input-group" style="padding:2em; color: black;">
                    <p>Seleccione el tipo de programación</p>
                    <div class="form-group col-md-12">
                            <br>
                            <select class="form-control" onchange="mostrar_programacion(this.value);" name="tipo_programacion" id="tipo_programacion" required
                            data-toggle="">
                            <option value="" selected>Seleccione una opción...</option>
                            <option value="COMPRA">COMPRA</option>
                            <option value="VENTA">VENTA</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>




                                <div id="display_compra_edicion" style="display: block;">
                                    <div style="display: block; -webkit-box-shadow: 2px 2px 5px #999; -moz-box-shadow: 2px 2px 5px #999;" id="formulario_manual_venta"  name="formulario_manual_venta" class="form-row widget p-md">

                                        <div class="form-group col-md-6">
                                            <label for="filtro">FILTRO<span class="text-danger"></span></label><br>
                                            <select class="form-control" name="filtro" id="filtro" required
                                                data-toggle="">
                                                <option selected>Seleccione una opción</option>
                                                <option value="1">FECHA DE LLEGADA</option>
                                                <option value="2">FECHA DE REGISTRO</option>
                                            </select>

                                        </div>


                                        <div class="form-group col-md-6">
                                          <label for="orden">FECHA</label>
                                          <input type="date"  name="fecha" onchange="traer_compras_dates(this.value)" parsley-trigger="change" required class="form-control" id="fecha">
                                        </div>




{{-- tabla --}}

<div class="col-md-12" id="tabla_compras" style="display:block;">
    <div class="widget p-md" style="align-content: center;">
        <div style="width: 100%;margin: 0px;">

            <div class="row justify-content-center" style="padding:3em;" id="datos_tabla">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-12 align-self-start table-responsive" style="color: black;font-size:14px;" id="table_users">
                    <table data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%" id="LOL" style="font-family:Helvetica Neue, Helvetica,Arial,sans-serif;">
                        <thead >
                            <tr>
                            <th>#PO</th>
                            <th>SUPPLIER</th>
                            <th>MATERIAL</th>
                            <th>LOT</th>
                            <th>SUPPLIER WEIGHT(Kg)</th>
                            <th>ARRIVAL DATE</th>
                            <th>ELIMINAR</th>
                            <th>EDITAR</th>


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












                                        <div class="form-group text-left mb-0">

                                            <button type="reset" onclick="location.href='/nueva_programacion'" class="btn btn-secondary waves-effect">
                                                Cancelar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                   {{-- formualrio para compras --}}


                                     {{-- formualrio para ventas --}}


</div> <!-- end container-fluid -->
@endsection
