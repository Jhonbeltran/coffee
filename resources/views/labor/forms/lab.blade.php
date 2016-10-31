			<div class="row">
				<div class="input-field col s12 m6 l4">
		            <select name="productor_id">
      					<option value="" disabled selected>Productor</option>
      					@foreach($productors as $productor)
      					<option value="{{$productor->id}}">{{$productor->nombre}}</option>
      					@endforeach
    				</select>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <select name="ubicacion_id">
      					<option value="" disabled selected>Ubicación</option>
      					@foreach($ubicacions as $ubicacion)
      					<option value="{{$ubicacion->id}}">{{$ubicacion->direccion}}</option>
      					@endforeach
    				</select>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <select name="variedad_id">
      					<option value="" disabled selected>Variedad</option>
      					@foreach($variedads as $variedad)
      					<option value="{{$variedad->id}}">{{$variedad->nombre}}</option>
      					@endforeach
    				</select>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <select name="especie_id">
      					<option value="" disabled selected>Especie</option>
      					@foreach($especies as $especie)
      					<option value="{{$especie->id}}">{{$especie->nombre}}</option>
      					@endforeach
    				</select>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <select name="operador_id">
      					<option value="" disabled selected>Operador</option>
      					@foreach($operadors as $operador)
      					<option value="{{$operador->id}}">{{$operador->nombre}}</option>
      					@endforeach
    				</select>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <i class="material-icons prefix">today</i>
		            {!!Form::date('fecha', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <i class="material-icons prefix">filter_vintage</i>
		            {!!Form::number('plantas', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label >Plantas</label>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <i class="material-icons prefix">nature_people</i>
		            {!!Form::text('actividad', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Actividad</label>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <i class="material-icons prefix">build</i>
		            {!!Form::number('jornales', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Jornales</label>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <i class="material-icons prefix">attach_money</i>
		            {!!Form::number('valor_jornales', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Valor Jornales</label>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <i class="material-icons prefix">attach_money</i>
		            {!!Form::number('valor_insumos', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Valor Insumos</label>
		        </div>
		        <div class="input-field col s12 m6 l4">
		            <i class="material-icons prefix">announcement</i>
		            {!!Form::text('observaciones', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Observaciones</label>
		        </div>

			</div>
			