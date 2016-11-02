@extends('layouts.clean')


@section('content')
<div class="">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel nav grisback">Registro de Labores</h5>
		</div>
	</div>
	<table class="highlight centered responsive-table">
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
		</thead>
		@foreach($results as $result)
		<tbody>
			<td>{{$result->id}}</td>
			<td>{{$result->nombreProductor}}</td>
			<td>{{$result->direccion}}</td>
			<td>{{$result->nombreVariedad}}</td>
			<td>{{$result->nombreEspecie}}</td>
			<td>{{$result->nombreOperador}}</td>
			<td>{{$result->fecha}}</td>
			<td>{{$result->plantas}}</td>
			<td>{{$result->actividad}}</td>
			<td>{{$result->jornales}}</td>
			<td>{{$result->valor_jornales}}</td>
			<td>{{$result->valor_insumos}}</td>
			<td>{{$result->observaciones}}</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop