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
                        <li class="breadcrumb-item"><a href="/listas">Listas Ventas</a></li>
                        <li class="breadcrumb-item active">Registro de Ventas</li>
                    </ol>
                </div>
                <h4 class="page-title">Registrar nuevo tipo de Ventas</h4>

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
                            <h4 class="header-title">Formulario de registro</h4>
                            <p class="sub-header">
                                Formulario para registrar nuevas listas<i class="ion-ios-trash"></i>.
                            </p>


<hr>

<form action="{{ route('listas_ventas.store') }}" id="formulario" method="POST">
                                @csrf






                            <div class="form-group">
                                <label for="tipo">Tipo<span class="text-danger">*</span></label><br>
                                <select class="form-control" name="tipo" id="tipo" required
                                    data-toggle="">
                                    <option selected>Seleccione una opción</option>
                                    <option value="1">Cliente</option>
                                    <option value="2">Materiales</option>
                                </select>

                            </div>


                                <div class="form-group" >
                                    <label for="AcuerdoName">Nombre<span class="text-danger">*</span></label>
                                    <input type="text" name="nombre"  parsley-trigger="change" required onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                     placeholder="Ingrese el nombre de la nueva lista" class="form-control" id="nombre">
                                </div>

                                 </div>






                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" onclick="submit();" id="submit"  type="submit">
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
