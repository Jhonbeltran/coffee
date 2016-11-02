<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Land</title>
    <!-- Compiled and minified CSS -->
     {!! MaterializeCSS::include_full() !!}
    
    <!--Import Google Icon Font-->
    {!!Html::style('https://fonts.googleapis.com/css?family=Sansita+One|Material+Icons|Righteous')!!}
    
    
    

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
</head>
<body>
    <style type="text/css">
      .brand-logo{font-family: 'Sansita One', cursive;}
      .elegant{font-family: 'Righteous', cursive !important;}
      .navigation{background-color: #c7ad88 !important;}
      .nav{color: #c7ad88 !important;}
      .logo{color: #935347 !important;}
      .icon{color: #64706c !important; font-size: 3em !important;}
      .gris{color: #64706c !important;}
      .grisback{background-color: #64706c !important;}
      .icon-index{color: #64706c !important; font-size: 1.5em !important;}
      .borde{border: 1px #64706c solid}
      .sesion{font-family: 'Quattrocento Sans', sans-serif;}
      .subtable{background-color: #ede9ce !important;}

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
       img{height: 60%}
    </style>
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper z-depth-0 navigation">
            <a href="#!" class="brand-logo  logo">Coffe Land</a>
          </div>
        </nav>
    </div>

    @yield('content')
    
    <footer class="page-footer  navigation">
        
        <div class="footer-copyright">
            <div class="container brown-text text-darken-3">
            © 2016 Coffee Land
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
        </div>
    </footer>


    <!--Import jQuery before materialize.js-->
    {!!Html::script('https://code.jquery.com/jquery-2.1.1.min.js')!!}
    <!-- Compiled and minified JavaScript -->
    {!! MaterializeCSS::include_js() !!}
    <script>
      $( document ).ready(
        function(){$(".button-collapse").sideNav(); $(".dropdown-button").dropdown(); $('select').material_select();})
    </script>
</body>
</html>