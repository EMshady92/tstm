@extends('layouts.app')

@section('content')
<div class="w-full h-full">

    <div style="height:10%;" class="w-full fixed">
        @include('top-bar')
    </div>

    <div style="height:80%;" class="w-full overflow-y-auto overflow-x-hidden fixed">
        @include('main')
    </div>

{{--     <div style="height:10%;" class="w-full">
        @include('footer-bar')
    </div> --}}


</div>
@endsection
