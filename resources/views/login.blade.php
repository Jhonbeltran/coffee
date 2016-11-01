<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Compiled and minified CSS -->
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css')!!}
    
    <!--Import Google Icon Font-->
    {!!Html::style('https://fonts.googleapis.com/css?family=Sansita+One|Material+Icons|Righteous|Quattrocento+Sans')!!}
    
    

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
</head>
<body>
    <style type="text/css">
      .brand-logo{font-family: 'Sansita One', cursive;}
      .elegant{font-family: 'Righteous', cursive !important;}
      .navigation{background-color: #c7ad88 !important;}
      .logo{color: #935347 !important;}
      .icon{color: #64706c !important; font-size: 3em !important;}
      .icon-index{color: #64706c !important; font-size: 1.5em !important;}
      .borde{border: 1px #64706c solid}
      .sesion{font-family: 'Quattrocento Sans', sans-serif;}
      /* label color */
       .input-field label {
         color: #000;
       }
       /* label focus color */
       .input-field input[type=text]:focus + label {
         color: #935347;
       }
       /* label underline focus color */
       .input-field input[type=text]:focus {
         border-bottom: 1px solid #935347;
         box-shadow: 0 1px 0 0 #000;
       }
       /* valid color */
       .input-field input[type=text].valid {
         border-bottom: 1px solid #000;
         box-shadow: 0 1px 0 0 #000;
       }
       /* invalid color */
       .input-field input[type=text].invalid {
         border-bottom: 1px solid #b71c1c ;
         box-shadow: 0 1px 0 0 #000;
       }
       /* icon prefix focus color */
       .input-field .prefix.active {
         color: #935347;
       }
       /* label focus color */
       .input-field input[type=password]:focus + label {
         color: #935347;
       }
       /* label underline focus color */
       .input-field input[type=password]:focus {
         border-bottom: 1px solid #935347;
         box-shadow: 0 1px 0 0 #000;
       }
       /* valid color */
       .input-field input[type=password].valid {
         border-bottom: 1px solid #000;
         box-shadow: 0 1px 0 0 #000;
       }
       /* invalid color */
       .input-field input[type=password].invalid {
         border-bottom: 1px solid #b71c1c;
         box-shadow: 0 1px 0 0 #000;
       }
    </style>
<?php $message=Session::get('message')?>

@if($message == 'fail')
  <script>
    alert('Datos erroneos');
  </script> 
@endif
  <div class="container">
      <div class="row">

        <div class="col s12 l6 hide-on-med-and-down">
          <img src="http://i.imgur.com/SF3BmOU.png" width="280" alt="" class="imagen">
          </div>

        <div class="col s12 l6">
          <h1 class="logo brand-logo center-align">Coffee Land</h1>
          <h4 class="loginTexto center-align icon sesion">Iniciar sesión</h4>
                        
          {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">language</i>
                {!!Form::text('email', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
                <label for="icon_prefix">Correo electrónico</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                {!!Form::password('password', ['class'=>'validate', 'id'=>'icon_prefix'])!!}
                <label for="icon_prefix">Inserta tu Contraseña</label>
              </div>
            </div>
      
            <div class="row center">
              <div class="col s12">
                {!!Form::submit('Ingresar', ['class'=>'btn navigation grey-text text-darken-3'])!!}
              </div>
            </div>
          {!!Form::close()!!}
            

          <p class="flow-text center-align sesion">Registra todos los datos estés donde estés, aplicación 100% adaptable (necesitarás conexión a internet)</p>
                    
        </div>

                
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    {!!Html::script('https://code.jquery.com/jquery-2.1.1.min.js')!!}
    <!-- Compiled and minified JavaScript -->
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js')!!}
</body>
</html>