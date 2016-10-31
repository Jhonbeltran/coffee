@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Operador Agregado');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Operador Editado');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El registro del Operador ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel nav grisback">Registro de Operadores</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Operación</th>
		</thead>
		@foreach($operadors as $operador)
		<tbody>
			<td>{{$operador->id}}</td>
			<td>{{$operador->nombre}}</td>
			<td>
				{!!link_to_route('operador.edit', $title = 'Editar', $parameters = $operador->id, $attributes = ['class'=>'btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop