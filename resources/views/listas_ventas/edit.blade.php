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
                        <li class="breadcrumb-item"><a href="/">Listas</a></li>
                        <li class="breadcrumb-item"><a href="/listas_ventas">Listas ventas</a></li>
                        <li class="breadcrumb-item active">Edición tipos de listas ventas/li>
                    </ol>
                </div>
                <h4 class="page-title">Editar lista Ventas</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h4 class="header-title">Formulario de edición</h4>
                            <p class="sub-header">
                                Formulario para editar : {{$listas->nombre}}
                            .
                            </p>




                            <form action="{{url('/listas_cal_sal', [$listas->id])}}" id="formulario" method="post" class="form-horizontal parsley-examples" enctype="multipart/form-data" accept-charset="UTF-8" >
                            {{csrf_field()}}

							<input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label for="tipo">Tipo<span class="text-danger">*</span></label><br>
                                <select class="form-control" name="tipo" id="tipo" required
                                    data-toggle="">
                                    @if ($listas->tipo == '1')
                                    <option selected value="1">Cliente</option>
                                    <option value="2">Materiales</option>
                                    @else
                                    <option value="2">Materiales</option>
                                    <option  selected value="1">Cliente</option>
                                    @endif

                                </select>

                            </div>


                            <div class="form-group" >
                                    <label for="AcuerdoName">Nombre<span class="text-danger">*</span></label>
                                    <input type="text" name="nombre"  parsley-trigger="change" required onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                     value="{{$listas->NOMBRE}}" class="form-control" id="nombre">
                            </div>


                        </div>




                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" onclick="submit();" id="submit" type="submit">
                                        Guardar
                                    </button>
                                    <button type="reset" onclick="location.href='/listas_ventas'" class="btn btn-secondary waves-effect">
                                        Cancelar
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
             </div>

        </div>
    </div> <!-- end row -->
</div> <!-- end container-fluid -->
<script>
    function submit(){
     var form = document.getElementById('formulario');
     form.submit();
    }
</script>
@endsection
