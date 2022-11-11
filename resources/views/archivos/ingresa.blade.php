@extends('plantilla.plantilla')
@section('meter')

<div class="card m-2" style ="width :40rem;">
    <div class="card-header">
    New Car
    </div>
    <div class="card-body">
    <h3>Car</h3>
    <form action="{{ url('/Parking') }}" method="post">
    @csrf
    @include('archivos.formulario')
    </form>
</div>
</div>

@endsection
