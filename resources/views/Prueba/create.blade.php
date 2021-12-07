@extends('layouts.principal')
@section('contenido')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div  class="page-title-box">
                <div  align="right" class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/tiposFalta">example</a></li>
                        <li class="breadcrumb-item active">example</li>
                    </ol>
                </div>
                <h4 class="page-title">Registrar nuevo example</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div  class="row">
                    <div  class="col-lg-6">
                        <div>
                            <h4 class="header-title">Formulario de registro</h4>
                            <p class="sub-header">
                                Formulario para registrar example.
                            </p>

                            <hr>


                            <form  style="padding-top:10px;"  action=""{{--  method="post" --}} id="formulario" class="form-horizontal parsley-examples">
                            {{csrf_field()}}


                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>

                    </div>
                </div>
             </div>

        </div>
    </div> <!-- end row -->








</div> <!-- end container-fluid -->
<script>
    window.onload = function() {
        console.log('hola');

};

</script>

@endsection
<!-- Start Content-->
