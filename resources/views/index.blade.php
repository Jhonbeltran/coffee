@extends('layouts.principal')
<?php $message=Session::get('message')?>

@if($message == 'success')
  <script>
    alert('Ha logeado correctamente');
  </script> 
@endif
@section('content')

  <div class="row">
    <div class="col s12 m6 l4">
      <div class="col">
        <div class="icon-block">
            <h2 class="center brown-text hide-on-small-only"><i class="material-icons"></i></h2>
            <a class="grey-text center" href="/cultivo/create"><h5 class="center"><i class="material-icons brown-text">mode_edit</i>&nbsp;Ingresar Datos</h5></a>

            <p class="light center">Ingresa los datos de el cultivo, recuerda que estamos buscando la certificación, así que vamos a divertirnos.</p>
        </div>
      </div>
      <div class="col">
        <div class="icon-block">
            <h2 class="center brown-text hide-on-small-only"><i class="material-icons"></i></h2>
            <a class="grey-text center" href="/semilla/create"><h5 class="center"><i class="material-icons brown-text">opacity</i>&nbsp;Semillas</h5></a>

            <p class="light center">¿Quieres agregar alguna semilla? ¡Te apuesto a que esta va a ser la mejor semilla!.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l4 hide-on-med-and-down">
      <img width="100%" height="100%" src="http://mypicpic-drink.ucoz.ru/_ph/4/87146870.jpg" alt="">
    </div>
    <div class="col s12 m6 l4">
      <div class="col">
        <div class="icon-block">
            <h2 class="center brown-text hide-on-small-only"><i class="material-icons"></i></h2>
            <a class="grey-text center" href="/cultivo/"><h5 class="center"><i class="material-icons brown-text">dns</i>&nbsp;Registro</h5></a>

            <p class="light center">En esta sección puedes revisar todo el registro del cultivo, Mira todo lo que ha sucedido.</p>
        </div>
      </div>
      <div class="col">
        <div class="icon-block">
            <h2 class="center brown-text hide-on-small-only"><i class="material-icons"></i></h2>
            <a class="grey-text center" href="#!"><h5 class="center"><i class="material-icons brown-text">face</i>&nbsp;Contactanos</h5></a>

            <p class="light center">¿Quieres hablar con nosotros? Da click acá para ponernos en contacto.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="container"> -->
      <!-- <div class="row">
        <div class="col s12 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://static.pexels.com/photos/6347/coffee-cup-working-happy.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Ingresar Datos<i class="material-icons right">more_vert</i></span>
              <p><a href="/cultivo/create" class="deep-orange-text">Iniciar</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Ingresar Datos<i class="material-icons right">close</i></span>
              <p>Acá podrás ingresar los datos del cultivo.</p>
            </div>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="http://www.revistasumma.com/wp-content/uploads/2015/04/Caf%C3%A91.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Semillas<i class="material-icons right">more_vert</i></span>
              <p><a href="/semilla/create" class="deep-orange-text">Agregar</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Modificar<i class="material-icons right">close</i></span>
              <p>Actualiza la base de datos de Semillas.</p>
            </div>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="http://sawadacoffee.com/wp-content/uploads/Sawada-Coffee-10DEC2015-003.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Registro<i class="material-icons right">more_vert</i></span>
              <p><a href="/cultivo/" class="deep-orange-text">Ver</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Registro<i class="material-icons right">close</i></span>
              <p>Consulta los diferentes cultivos almacenados.</p>
            </div>
          </div>
        </div>
      </div> -->
  <!-- </div> -->
  <script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
  </script>
@stop