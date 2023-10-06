<div class="modal fade" id="modal-delete-{{$emp->id}}" tabindex="-1" arialabelledby="
ModalLabel" aria-hidden="true">
{{Form::Open(array('action'=>array('App\Http\Controllers\empleadoController@destroy',
    $emp->id),'method'=>'delete'))}}
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Eliminar Empleado</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="
Close"></button>
</div>
<div class="modal-body">
<p>Confirme si desea Eliminar empleado: 
<br /> No. identificaión: {{ $emp->documento_identidad }} 
<br /> Nombre: {{ $emp->nombre }}
<br /> Apellido: {{ $emp->apellido}}
</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Confirmar</button>
</div>
</div>
</div>
</div>
{{Form::Close()}}