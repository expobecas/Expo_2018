<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link href="../../../web/css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="../../../web/css/material_icons.css" rel="stylesheet" type="text/css">
    <link href="../../../web/css/main.css" rel="stylesheet" type="text/css">

</head>
<body class="fondo2">
<header>

</header>
<main>

<?php require_once'templates/side.class.php';?>

<div class="row">
  <div class="col s12 m12 l9 offset-l3">
    <div class="card fondo3">
      <div class="card-content white-text">
        <span class="card-title center">Solicitudes</span>
         <table>
          <thead>
          <tr>
              <th>Nombre del Alumno</th>
              <th>Fecha</th>
              <th>Visto</th>
          </tr>
          </thead>  
        </table>             
      </div>
    </div>



  <ul class="collection">
    <li class="collection-item avatar" onclick="window.open('forma.php'); window.close();">
      <img src="../../../web/img/dashboard/alumnos/alumno1.jpg" alt="" class="circle">
      <table>
          <tr>
              <th>Nombre del Alumno</th>
              <th>Fecha</th>
              <th>Visto</th>
          </tr>
        </table>   
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="../../../web/img/dashboard/alumnos/alumno2.jpg" alt="" class="circle">
      <table>
          <tr>
              <th>Nombre del Alumno</th>
              <th>Fecha</th>
              <th>Visto</th>
          </tr>

        </table>   
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="../../../web/img/dashboard/alumnos/alumno1.jpg" alt="" class="circle">
      <table>
          <tr>
              <th>Nombre del Alumno</th>
              <th>Fecha</th>
              <th>Visto</th>
          </tr>

        </table>   
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="../../../web/img/dashboard/alumnos/alumno1.jpg" alt="" class="circle">
      <table>
          <tr>
              <th>Nombre del Alumno</th>
              <th>Fecha</th>
              <th>Visto</th>
          </tr>

        </table>   
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li> 
  </ul>
  </div>
  </div>

      

</main>


<script src="../../../web/js/jquery-3.2.1.js"></script>
<script src="../../../web/js/materialize.js"></script>
<script src="../../../web/js/custom.js"></script>
     
</body>
</html>