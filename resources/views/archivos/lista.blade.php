@extends('plantilla.plantilla')
@section('lista')
<div class="card m-2" style ="width :40rem;" >
<div class="card-header">Coches actuales</div>
    <table class="table table-stripped">
        <thead >
            <tr>
                <th class="text-center">Coche</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            
            @each('archivos.parcial',$coches,'coche')

        </tbody>
    </table>
  
    
    </div>
@endsection