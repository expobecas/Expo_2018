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
        <div class="col s12 m8 l9 offset-l3 offset-m6">
          <div class="card fondo3">
            <div class="card-content white-text">
              <span class="card-title center">Patrocinadores</span>
              
              <div class="input-field col s6 offset-l7">
          <i class="material-icons prefix">zoom_in</i>
          <input id="icon_prefix" type="text" class="validate">

        </div>

              <table>
        <thead>
          <tr>
              <th>Patrocinador</th>
              <th>Cobro</th>
              <th>Fondo</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
            
          </div>
        </div>
      </div>


  <div class="fixed-action-btn">
    <a class="btn-floating btn-large lado waves-effect waves-light modal-trigger" href="#modal2">
      <i class="large material-icons">add</i>
      </a>  
  </div>

    <!-- Modal Structure -->
    <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Nuevo Patrocinador</h4>



      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Patrocinador</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Cobro</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Fondo</label>
        </div>
      </div>
  </div>


    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agregar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
    </div>
  </div>
 

        

</main>




<script src="../../../web/js/jquery-3.2.1.js"></script>
<script src="../../../web/js/materialize.js"></script>
<script src="../../../web/js/custom.js"></script>
     
</body>
</html>