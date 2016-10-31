@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Especie Agregada');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Especie Editada');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El Registro de la especie ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel nav grisback">Registro de Especies de Café</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Operación</th>
		</thead>
		@foreach($especies as $especie)
		<tbody>
			<td>{{$especie->id}}</td>
			<td>{{$especie->nombre}}</td>
			<td>
				{!!link_to_route('especie.edit', $title = 'Editar', $parameters = $especie->id, $attributes = ['class'=>'btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop