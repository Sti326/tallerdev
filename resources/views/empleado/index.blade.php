@extends('layout.plantilla')


@section('contenido')
<div class="row">
<div class="col-md-9">
<a href="{{url('empleado/create')}}" class="pull-right">
<button class="btn btn-success">Registrar Empleado</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>ID</th>
<th>Documento</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Edad</th>
<th>Cargo</th>
<th>Direccion</th>
<th>Correo Electrónico</th>
<th>Telefono</th>
<th>Opciones</th>
</thead>
<tbody>
@foreach($empleado as $emp)
<tr>
<td>{{ $emp->id }}</td>
<td>{{ $emp->documento_identidad }}</td>
<td>{{ $emp->nombre }}</td>
<td>{{ $emp->apellido}}</td>
<td>{{ $emp->edad }}</td>
<td>{{ $emp->cargo }}</td>
<td>{{ $emp->direccion }}</td>
<td>{{ $emp->email }}</td>
<td>{{ $emp->telefono }}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\empleadoController@edit',$emp->id)}}">
    <button class="btn btn-primary">Actualizar</button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$emp->id}}">
<button type="button" class="btn btn-danger"> Eliminar</button>
</td>
@include('empleado.modal')
</tr>
@endforeach
</tbody> </table>
</div></div>

@endsection