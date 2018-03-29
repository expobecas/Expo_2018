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
    <div class="col s12 m7 l7 offset-l4">
        <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../../web/img/dashboard/calendar.png">
        </div>
    </div>
</div>

<div class="row igualar2">
  <div class="col s12 m4 l9 offset-l3 offset-m6">
    <div class="card fondo4 tope2">
      <div class="card-content black-text">        
      <table>
    <tr>
        <th>Juan Luis Guerra</th>
        <th>Direccion</th>
        <th>Visto</th>
    </tr>
    </table>
      </div>
    </div>
  </div>
</div>
</main>


<?php require_once'templates/footer.php';?>


<script src="../../../web/js/jquery-3.2.1.js"></script>
<script src="../../../web/js/materialize.js"></script>
<script src="../../../web/js/custom.js"></script>
     
</body>
</html>