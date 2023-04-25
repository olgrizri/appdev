@extends('layout.plantilla')
@section('titulo') AppDev-Persona-Insertar
@endsection
 @section('contenidoPrincipal')

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <h4>Ingresar Asignatura</h4>
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error) <li>{{$error}}</li>
@endforeach
</ul> </div>
@endif
    </div>
</div>
{!!Form::open(array('url'=>'asignatura','method'=>'POST','autocomplete'=>'off') )!!}
{{Form::token()}}

<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12"> 
<div class="form-group">
<label for="cod_asignatura">cod_asignatura</label>
<input type="text" name="cod_asignatura" id="cod_asignatura" class="form-control" placeholder="cod_asignatura"> </div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="nombre">Nombres</label>
<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre asignatura"> 
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="creditos">Creditos</label>
<input type="text" name="creditos" id="creditos" class="form-control" placeholder="creditos">
</div>
</div>

<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-primary" type="submit"><span
class="glyphicon glyphicon-ok"></span> Guardar</button>
<button class="btn btn-danger" type="reset"><span
class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
<a class="btn btn-info" type="reset" href="{{url('asignatura')}}">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>
</div>



    
</div>
{!!Form::close()!!}
@endsection