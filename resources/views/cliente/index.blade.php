@extends('layout.plantilla')

@section('contenido')
<div class="row">
<div class="col-md-9">
<a href="{{url('cliente/create')}}" class="pull-right">
<button class="btn btn-success">Registrar Cliente</button> </a>
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
<th>Correo Electrónico</th>
<th>Telefono</th>
<th>Opciones</th>
</thead>
<tbody>
@foreach($cliente as $cli)
<tr>
<td>{{ $cli->id}}</td>
<td>{{ $cli->documento_identidad}}</td>
<td>{{ $cli->nombre}}</td>
<td>{{ $cli->apellido}}</td>
<td>{{ $cli->edad}}</td>
<td>{{ $cli->email}}</td>
<td>{{ $cli->telefono}}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\clienteController@edit',$cli->id)}}">
    <button class="btn btn-primary">Actualizar</button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$cli->id}}">
<button type="button" class="btn btn-danger"> Eliminar</button>
</a>
</td>
@include('cliente.modal')
</tr>
@endforeach
</tbody> </table>
</div></div>
@endsection