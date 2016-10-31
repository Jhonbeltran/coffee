@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Ubicacion Agregada');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Ubicacion Editada');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('La Ubicacion ha sido eliminada');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel nav grisback">Direcciones Almacenadas</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Dirección</th>
		</thead>
		@foreach($ubicacions as $ubicacion)
		<tbody>
			<td>{{$ubicacion->id}}</td>
			<td>{{$ubicacion->direccion}}</td>
			<td>
				{!!link_to_route('ubicacion.edit', $title = 'Editar', $parameters = $ubicacion->id, $attributes = ['class'=>'btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop