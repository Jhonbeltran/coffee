@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Actividad almacenada correctamente');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Actividad editada correctamente');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El registro de la Actividad ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel deep-orange lighten-2">Actividades</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Operación</th>
		</thead>
		@foreach($actividads as $actividad)
		<tbody>
			<td>{{$actividad->id}}</td>
			<td>{{$actividad->nombre}}</td>
			<td>
				{!!link_to_route('actividad.edit', $title = 'Editar', $parameters = $actividad->id, $attributes = ['class'=>'btn btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop