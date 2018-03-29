<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion</title>

    <link href="../../../../web/css/material_icons.css" rel="stylesheet" type="text/css">

    <link href="../../../../web/css/main.css" rel="stylesheet" type="text/css">
    <link href="../../../../web/css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="../../../../web/css/login.css" rel="stylesheet" type="text/css">

</head>
<body class="fondo">

<header>

</header>
<!--PANELES Y INPUT-->
<main>
<div class="igualar">
    <div class="row">  
        
    <div class="col s10 m8 l3 offset-l1 offset-s1 offset-m2 tope"> 
        <div class="card  indigo lighten-1 z-depth-5">
            <div class="card-image circle waves-effect waves-block waves-light">
                <img class="activator prueba responsive-img" src="../../../../web/img/alumnos/prueba.jpg">
            </div>
                <div id="algo"class="card-content">
                    <span class="card-title center white-text text-darken-4">Card Title</span>
                    <p class="white-text">Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            <div class="card-reveal">
                <span class="card-title grey-text center text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
        </div>   
    </div>         

    <div class="col s10  m10 l6 offset-s1 offset-m1">                      
          <div class="card grey lighten-5 z-depth-5">
            <div class="card-content black-text center">
                <span class="card-title">Inicio de Sesion
                </span>      
            </div>           
  <div class="row">
    <form class="col s10">
      <div class="row ">
        <div class="input-field col s10 offset-l2  offset-s2">
          <input id="first_name" type="text" class="validate espacio">
          <label for="first_name">Usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s10 offset-l2 offset-s2">
          <input id="password" type="password" class="validate espacio">
          <label for="password">Contraseña</label>
        </div>
      </div>    
<div class="center">
    <button class="btn centro light-blue darken-3 waves-effect waves-light" onclick="window.open('dashboard_estudiante.php'); window.close();">Ingresar
        <i class="material-icons right">send</i>
    </button>
<div>     
    </form>
    
    <a class="waves-effect centro waves-teal btn-flat abajo">Olvidaste tu contraseña</a>
  </div>
</div>        
</div>
</div>
</div>


</main>

<script type="text/javascript" src="../../../../web/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../../web/js/materialize.min.js"></script>
<script src="js/custom.js"></script>
    
</body>
</html>
