@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Productor Agregado');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Productor Editado');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El registro del Productor ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="nav card-panel icon">Registro de Productores</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Operación</th>
		</thead>
		@foreach($productors as $productor)
		<tbody>
			<td>{{$productor->id}}</td>
			<td>{{$productor->nombre}}</td>
			<td>
				{!!link_to_route('productor.edit', $title = 'Editar', $parameters = $productor->id, $attributes = ['class'=>'btn btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop