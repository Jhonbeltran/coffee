@extends('layouts.principal')

@section('content')
<div class="container">
	<table class="highlight centered responsive-table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Oprecion</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td></td>
		</tbody>
		@endforeach
	</table>
</div>
@stop