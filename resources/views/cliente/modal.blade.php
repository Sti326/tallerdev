<div class="modal fade" id="modal-delete-{{$cli->id}}" tabindex="-1" arialabelledby="
ModalLabel" aria-hidden="true">
{{Form::Open(array('action'=>array('App\Http\Controllers\clienteController@destroy',
    $cli->id),'method'=>'delete'))}}
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Eliminar Cliente</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="
Close"></button>
</div>
<div class="modal-body">
<p>Confirme si desea eliminar al Cliente:
<br /> No. identificaión: {{ $cli->documento_identidad }} 
<br /> Nombre: {{ $cli->nombre }}
<br /> Apellido: {{ $cli->apellido}}
</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bsdismiss="
modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Confirmar</button>
</div>
</div>
</div>
</div>
{{Form::Close()}}