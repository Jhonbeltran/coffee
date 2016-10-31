@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Vaeridad Agregada');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Vaeridad Editada');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El Registro de la Vaeridad ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel nav grisback">Registro de Variedades de Café</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Operación</th>
		</thead>
		@foreach($variedads as $variedad)
		<tbody>
			<td>{{$variedad->id}}</td>
			<td>{{$variedad->nombre}}</td>
			<td>
				{!!link_to_route('variedad.edit', $title = 'Editar', $parameters = $variedad->id, $attributes = ['class'=>'btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop