@extends('layouts.app')
@section('content')

<div class="wrap">
    @include('canvas_odontograma')
    @include('opciones_canvas')
    @include('odontograma_html')

    <odontogramageneral></odontogramageneral>
</div>


@endsection
