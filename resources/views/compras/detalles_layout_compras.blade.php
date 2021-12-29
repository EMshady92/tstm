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
                        <li class="breadcrumb-item"><a>Programación compras</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Programación compras</h4>
                <hr>
              {{--   <a href="/listas_cal_sal/create" class="button-list">
                    <button type="button" class="btn btn-success waves-effect waves-light">
                        <span class="btn-label"><i class="mdi mdi-plus-box"></i>
                        </span>Registrar</button>
                </a> --}}
            </div>
        </div>
    </div>
    <!-- end page title -->

<hr>

    <div class="row">
        <div class="col-12">
            <div class="card-box">



                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#PO</th>
                            <th>YEAR</th>
                            <th>MONTH</th>
                            <th>SUPPLIER</th>
                            <th>MATERIAL</th>
                            <th>LOT</th>
                            <th>SUPPLIER WEIGHT(Kg)</th>
                            <th>ARRIVAL DATE</th>
                            <th>ESTATUS</th>
                            <th>IMPORTACIÓN</th>
                            <th>OBSERVACIÓNES</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach($excel as $registro)
                        <tr>
                            <td>{{$registro->po}}</td>
                            <td>{{$registro->year}}</td>
                            <td>{{$registro->month}}</td>
                            <td>{{$registro->supplier}}</td>
                            <td>{{$registro->material}}</td>
                            <td>{{$registro->lot}}</td>
                            <td>{{$registro->supplier_weight}}</td>
                            <td>{{$registro->reception_date}}</td>
                            <td>{{$registro->estatus}}</td>
                            <td>{{$registro->importacion}}</td>
                            <td>{{$registro->observaciones}}</td>


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
