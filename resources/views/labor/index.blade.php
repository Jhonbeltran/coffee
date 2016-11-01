@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Labor Agregada');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Labor Editada');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('La Labor ha sido eliminada');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel nav grisback">Registro de Labores</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Productor</th>
			<th>Ubicación</th>
			<th>Variedad</th>
			<th>Especie</th>
			<th>Operador</th>
			<th>Fecha de siembra</th>
			<th>Plantas</th>
			<th>Actividad</th>
			<th>Jornales</th>
			<th>Valor Jornales</th>
			<th>Valor Insumos</th>
			<th>Observaciones</th>
			<th>Opciones</th>
		</thead>
		@foreach($labors as $labor)
		<tbody>
			<td>{{$labor->id}}</td>
			<td>{{$labor->productor_id}}</td>
			<td>{{$labor->ubicacion_id}}</td>
			<td>{{$labor->variedad_id}}</td>
			<td>{{$labor->especie_id}}</td>
			<td>{{$labor->operador_id}}</td>
			<td>{{$labor->fecha}}</td>
			<td>{{$labor->plantas}}</td>
			<td>{{$labor->actividad}}</td>
			<td>{{$labor->jornales}}</td>
			<td>{{$labor->valor_jornales}}</td>
			<td>{{$labor->valor_insumos}}</td>
			<td>{{$labor->observaciones}}</td>
			<td>
				{!!link_to_route('labor.edit', $title = 'Editar', $parameters = $labor->id, $attributes = ['class'=>'btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop