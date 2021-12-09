@extends('layouts.principal')
@section('content')
<table class="table">
  <thead>
    <tr>

      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
       <th scope="col">create</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($listas as $lista)
    <tr>
      <td>{{$lista->nombre}}</td>
      <td>{{$lista->usuario}}</td>
      <td>{{$lista->email}}</td>
        <td> <a href="{{URL::action('ListasController@create',$lista->id)}}"
                                    class="btn waves-effect waves-light btn-primary" role="button"><i class="mdi mdi-account-edit-outline"></i></a>
                            </td>
    </tr>
  @endforeach
    </tbody>
</table>
@endsection
