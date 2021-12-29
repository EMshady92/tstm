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
                        <li class="breadcrumb-item"><a href="/listas">Listas</a></li>
                        <li class="breadcrumb-item active">Catalogo listas</li>
                    </ol>
                </div>
                <h4 class="page-title">Catálogo de listas</h4>
                <hr>
                <a href="/listas/create" class="button-list">
                    <button type="button" class="btn btn-success waves-effect waves-light">
                        <span class="btn-label"><i class="mdi mdi-plus-box"></i>
                        </span>Registrar</button>
                </a>
            </div>
        </div>
    </div>
    <!-- end page title -->

<hr>

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Descarga</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                            <th>Estado</th>
                            <th>Fecha de registro</th>
                            <th>Ultima actualización</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach($listas as $lista)
                        <tr>
                            <td>{{$lista->tipo}}</td>
                            <td>{{$lista->nombre}}</td>



                            <td> <a  href="{{ route('listas.edit',$lista->id) }}"
                                    class="btn waves-effect waves-light btn-primary" role="button"><i class="zmdi zmdi-edit"></i></a>
                            </td>
                            <td>   <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                                <a class="btn waves-effect waves-light btn-warning" onclick=inactivar('{{$lista->id}}','listas');
                                         style="margin-right: 10px;" role="button"><i
                                            class="zmdi zmdi-delete"></i></a>
                                </td>

                            <td><span class="badge badge-success">{{$lista->estado}}</span></td>



                            <td>{{$lista->created_at}}</td>
                            <td>{{$lista->updated_at}}</td>


                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- end container-fluid -->
@endsection
