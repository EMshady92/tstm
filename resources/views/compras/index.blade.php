@extends('layouts.principal')
@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/listas_cal_sal">Nueva programación</a></li>

                    </ol>
                </div>
                <h4 class="page-title">Nueva programación</h4>
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



                                    {{-- formualrio para compras --}}
                                <div id="display_compras" style="display: none;">
                                    <form  id="formulario_compra" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12 widget p-md">

                                                    <div class="form-group col-md-6">
                                                        <label for="tipo_subida_ventas">TIPO DE REGISTRO<span class="text-danger">*</span></label><br>
                                                        <select class="form-control" required name="tipo_de_registro_venta" onchange="tipo_registro_compra(this.value);" id="tipo_de_registro_venta" required
                                                            data-toggle="">
                                                            <option selected>Seleccione una opción</option>
                                                            <option value="MANUAL">MANUAL</option>
                                                            <option value="LAYOUT">LAYOUT</option>
                                                        </select>

                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>


                                                     {{-- formulario --}}

                                                      {{-- tarjeta --}}
                                                      <div style="display: none; -webkit-box-shadow: 2px 2px 5px #999; -moz-box-shadow: 2px 2px 5px #999;" id="formulario_manual_compra"  name="formulario_manual_compra" class="form-row widget p-md">

                                                        <div class="form-group col-md-6">
                                                          <label for="po">#PO</label>
                                                          <input type="text"  name="po" parsley-trigger="change" required class="form-control" id="po">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                          <label for="year">YEAR</label>
                                                          <input type="text" name="year" required class="form-control" value="{{$year}}" id="year">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="month">MONTH</label>
                                                            <input type="text" name="month" required class="form-control" value="{{$month}}" id="month">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="tipo">SUPPLIER<span class="text-danger">*</span></label><br>
                                                            <select class="form-control" name="supplier" id="supplier" required
                                                                data-toggle="">
                                                                <option selected>Seleccione una opción</option>
                                                                @foreach ($proveedores as $proveedor)
                                                                <option value="{{$proveedor->nombre}}">{{$proveedor->nombre}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="tipo">MATERIAL<span class="text-danger">*</span></label><br>
                                                            <select class="form-control" name="material" id="material" required
                                                                data-toggle="">
                                                                <option selected>Seleccione una opción</option>
                                                                @foreach ($materiales as $material)
                                                                <option value="{{$material->nombre}}">{{$material->nombre}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="lot">#LOT</label>
                                                            <input type="text" required class="form-control"  name="lot" id="lot">
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                              <label for="supplier">SUPPLIER WEIGHT</label>
                                                              <input type="text" required  class="form-control"  name="supplier_weight" id="supplier_weight">
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="reception_date">RECEPTION DATE</label>
                                                            <input type="date" required class="form-control"  name="reception_date" id="reception_date">
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="tipo">TIPO IMPORTACIÓN<span class="text-danger">*</span></label><br>
                                                            <select class="form-control" required name="importacion" id="importacion" required
                                                                data-toggle="">
                                                                <option selected>Seleccione una opción</option>
                                                                <option value="IMPORTACIÓN">IMPORTACIÓN</option>
                                                                <option value="NACIONAL">NACIONAL</option>
                                                                <option value="IMMEX">IMMEX</option>
                                                            </select>

                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="observaciones">OBSERVACIÓNES</label>
                                                            <textarea type="text" class="form-control"  name="observaciones" id="observaciones"></textarea>
                                                          </div>

                                                          {{-- tarjeta --}}









                                                          <div class="form-group text-left mb-0">
                                                              <button class="btn btn-primary waves-effect waves-light mr-1" onclick="guardar_nueva_compra();" id="submit"  type="button">
                                                                Guardar
                                                            </button>
                                                            <button type="reset" onclick="location.href='/nueva_programacion'" class="btn btn-secondary waves-effect">
                                                                Cancelar
                                                            </button>
                                                        </div>
                                                    </div>

                                                     {{-- formulario --}}

                                                    </div>

                                                </div>
                                            </form>

                                            <div style="display: none; -webkit-box-shadow: 2px 2px 5px #999; -moz-box-shadow: 2px 2px 5px #999;" id="formulario_layout_compra"  name="formulario_layout_compra" class="form-row widget p-md">
                                                <form  action="{{route('compras.store')}}" id="formulario_compra_excel" method="POST" name="formulario_compra_excel" files="true" enctype="multipart/form-data" accept-charset="UTF-8">
                                                    @csrf
                                                    <div style="margin-top:10px;" class="form-group col-md-6">
                                                    <div style="padding:5px; border-style: solid;" class="custom-file">
                                                        <input  type="file" class="file" id="file_compra" name="file_compra">

                                                    </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>

                                                {{-- tarjeta --}}









                                                    <div class="form-group text-left mb-0">
                                                        <button class="btn btn-primary waves-effect waves-light mr-1"  id="submit"  type="submit">
                                                            Guardar
                                                        </button>
                                                        <button type="reset" onclick="location.href='/nueva_programacion'" class="btn btn-secondary waves-effect">
                                                            Cancelar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                            </div>
                                             {{-- form layout --}}
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                   {{-- formualrio para compras --}}

                                    {{-- formualrio para ventas --}}
                                   <div id="display_ventas" style="display: none;">
                                    <form  id="formulario_venta" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12 widget p-md">



                                                     {{-- formulario --}}
                                                     <div class="form-group col-md-6">
                                                        <label for="tipo_subida_ventas">TIPO DE REGISTRO<span class="text-danger">*</span></label><br>
                                                        <select class="form-control" required name="tipo_de_registro_venta" onchange="tipo_registro_venta(this.value);" id="tipo_de_registro_venta" required
                                                            data-toggle="">
                                                            <option selected>Seleccione una opción</option>
                                                            <option value="MANUAL">MANUAL</option>
                                                            <option value="LAYOUT">LAYOUT</option>
                                                        </select>

                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>


                                                      {{-- tarjeta --}}
                                                      <div style="display: none; -webkit-box-shadow: 2px 2px 5px #999; -moz-box-shadow: 2px 2px 5px #999;" id="formulario_manual_venta"  name="formulario_manual_venta" class="form-row widget p-md">

                                                        <div class="form-group col-md-6">
                                                          <label for="orden">#ORDEN COMPRA</label>
                                                          <input type="text"  name="orden" parsley-trigger="change" required class="form-control" id="orden">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                          <label for="year">YEAR</label>
                                                          <input type="text" name="year" required class="form-control" value="{{$year}}" id="year">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="month">MONTH</label>
                                                            <input type="text" name="month" required class="form-control" value="{{$month}}" id="month">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="cliente">CLIENTE<span class="text-danger">*</span></label><br>
                                                            <select class="form-control" name="cliente" id="cliente" required
                                                                data-toggle="">
                                                                <option selected>Seleccione una opción</option>
                                                                @foreach ($clientes as $cliente)
                                                                <option value="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="tipo">MATERIAL<span class="text-danger">*</span></label><br>
                                                            <select class="form-control" name="material" id="material" required
                                                                data-toggle="">
                                                                <option selected>Seleccione una opción</option>
                                                                @foreach ($materiales_venta as $material)
                                                                <option value="{{$material->nombre}}">{{$material->nombre}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="lote">#LOT</label>
                                                            <input type="text" required class="form-control"  name="lote" id="lote">
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                              <label for="c_lotes">CANTIDAD DE BULTOS</label>
                                                              <input type="text" required  class="form-control"  name="c_lotes" id="c_lotes">
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="p_list">PESO(Packet List)</label>
                                                            <input type="text" required class="form-control"  name="p_list" id="p_list">
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="fecha_envio">FECHA DE ENVÍO</label>
                                                            <input type="date" required class="form-control"  name="fecha_envio" id="fecha_envio">
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="n_sellos">NÚMERO DE SELLO</label>
                                                            <input type="number" required  class="form-control"  name="n_sellos" id="n_sellos">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="n_cajas">NÚMERO DE CAJA</label>
                                                            <input type="number" required  class="form-control"  name="n_cajas" id="n_cajas">
                                                        </div>



                                                        <div class="form-group col-md-6">
                                                            <label for="observaciones">OBSERVACIÓNES</label>
                                                            <textarea type="text" class="form-control"  name="observaciones" id="observaciones"></textarea>
                                                          </div>


                                                      {{-- tarjeta --}}









                                                        <div class="form-group text-left mb-0">
                                                            <button class="btn btn-primary waves-effect waves-light mr-1" onclick="guardar_nueva_venta();" id="submit"  type="button">
                                                                Guardar
                                                            </button>
                                                            <button type="reset" onclick="location.href='/nueva_programacion'" class="btn btn-secondary waves-effect">
                                                                Cancelar
                                                            </button>
                                                        </div>
                                                    </div>
                                                     {{-- formulario --}}


                                                    </div>

                                                </div>
                                            </form>
                                             {{-- formulario layout --}}
                                             <div style="display: none; -webkit-box-shadow: 2px 2px 5px #999; -moz-box-shadow: 2px 2px 5px #999;" id="formulario_layout_venta"  name="formulario_layout_venta" class="form-row widget p-md">
                                                <form  action="{{route('ventas.store')}}" id="formulario_venta_excel" method="POST" name="formulario_venta_excel" files="true" enctype="multipart/form-data" accept-charset="UTF-8">
                                                    @csrf
                                                    <div style="margin-top:10px;" class="form-group col-md-6">
                                                    <div style="padding:5px; border-style: solid;" class="custom-file">
                                                        <input  type="file" class="file" id="file_venta" name="file_venta">

                                                    </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>

                                                {{-- tarjeta --}}









                                                    <div class="form-group text-left mb-0">
                                                        <button class="btn btn-primary waves-effect waves-light mr-1"  id="submit"  type="submit">
                                                            Guardar
                                                        </button>
                                                        <button type="reset" onclick="location.href='/nueva_programacion'" class="btn btn-secondary waves-effect">
                                                            Cancelar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                             {{-- formulario latout --}}
                                </div>
                                     {{-- formualrio para ventas --}}


</div> <!-- end container-fluid -->
@endsection
