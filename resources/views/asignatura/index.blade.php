@extends('layout.plantilla')
@section('titulo') AppDev-Persona 
@endsection

@section('contenidoPrincipal')

<div class="row">
<div class="col-md-9">
<a href="{{url('asignatura/create')}}" class="pull-right">
<button class="btn btn-success">Crear Asignatura</button> </a> </div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover"> <thead>
<th>Cod_Asignatura</th> 
<th>Nombres</th> 
<th>Creditos</th> 
</thead>
<tbody>
@foreach($asignaturas as $asig)
<tr>
<td>{{ $asig->cod_asignatura }}</td>
<td>{{ $asig->creditos }}</td>
<td>{{ $asig->nombre }}</td>
<td>
<a href=""><button class="btn btn-primary">Actualizar</button></a> 
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$asig->cod_asignatura}}"> 
    <button type="button" class="btn btn-danger"> Eliminar</button>
</a>
</td>
</tr> 


@endforeach
</tbody> </table>
</div></div>
@endsection
