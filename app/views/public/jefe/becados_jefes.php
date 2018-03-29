<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<!--Import Google Icon Font-->
<link href="../../../../web/css/material_icons.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../../../../web/css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="../../../../web/css/micss.css" type="text/css">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
<!--Slidenav-->
<ul id="slide-out" class="side-nav fixed zona_menu">
	<li>
	<div class="user-view">
		<div class="background">
			<img src="../../../../web/img/alumnos/fondo_rical.jpg" alt="">
		</div>
		<a href="#!user"><img class="logo_ricaldone" src="../../../../web/img/alumnos/ricaldone.jpg"></a>
		<a href="#!name"><span class="white-text name">Programa de Becas</span></a>
		<a href="#!email"><span class="white-text email">info@ricaldone.edu.sv</span></a>
	</div>
	</li>
	<li><a href="inicio_jefe.php" class = "white-text"><i class="material-icons white-text">home</i>Inicio</a></li>
	<li><a href="becados_jefes.php"class = "white-text" ><i class="material-icons white-text">folder</i>Becas</a></li>
	<li><a href="expediente_jefe.php"class = "white-text"><i class="material-icons white-text">folder</i>Casos</a></li>
	<li><a href="patrocinador_jefe.php"class = "white-text"><i class="material-icons white-text">group</i>Patrocinadores</a></li>
	<li><a href="login_jefe.php" class = "white-text"><i class="material-icons white-text">close</i>Cerrar Sesión</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">view_stream</i></a>
</header>
<!--Tablas de becados y buscador-->
<main>
<div class="row">
	<div class="col l8 offset-l3">
		<ul id="tabs-swipe-demo" class="tabs">
			<li class="tab col l6"><a class="active" href="#test-swipe-1">Test 1</a></li>
			<li class="tab col l6"><a href="#test-swipe-2">Test 2</a></li>
		</ul>
	</div>
  	<div id="test-swipe-1" class="col l8 offset-l3 white">
        <div class="row">
        <div class="encabezado col l7 offset-l4">
        <h3>Alumnos Becados</h3>
    </div>
    <form class="col l6 offset-l8">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">N° Carnet</label>
            </div>
        </div>
    </form>

    <div class="encabezado col l8 offset-l2">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Pais</th>
                    <th>Empresa</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>Jonathan</td>
                <td>El Salvador</td>
                <td>Office Depot</td>
            </tr>
            <tr>
                <td>Alexia</td>
                <td>Guatemala</td>
                <td>Subway</td>
            </tr>
            <tr>
                <td>Primo</td>
                <td>El Salvador</td>
                <td>Siman</td>
            </tr>
            </tbody>
        </table>
    </div>
        </div>
    </div>
    <div id="test-swipe-2" class="col l8 offset-l3 white">
        <div class="row">
            <div class="encabezado col l7 offset-l3">
                <h3>Alunmos no Becados</h3>
            </div>
            <form class="col l6 offset-l8">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">search</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">N° Carnet</label>
                    </div>
                </div>
            </form>

            <div class="encabezado col l8 offset-l2">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Pais</th>
                            <th>Empresa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Jonathan</td>
                        <td>El Salvador</td>
                        <td>Office Depot</td>
                    </tr>
                    <tr>
                        <td>Alexia</td>
                        <td>Guatemala</td>
                        <td>Subway</td>
                    </tr>
                    <tr>
                        <td>Primo</td>
                        <td>El Salvador</td>
                        <td>Siman</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>	
</div>
</main>
<!--Pie de pagina-->
<footer class="page-footer" style="background: #585B8E">
    <div class="footer-copyright">
        <div class="container">
            <div  class="row">
                <div class="col l6 s12">
                    © 2018 Instituto Tecnico Ricaldone
                </div>

                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="http://www.ricaldone.edu.sv/">Ricaldone</a>&nbsp;
                            <a class="grey-text text-lighten-3" href="https://www.facebook.com/">Facebook</a>&nbsp;
                            <a class="grey-text text-lighten-3" href="https://twitter.com">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../../../../web/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../../web/js/materialize.min.js"></script>
<script type="text/javascript" src="../../../../web/js/efectos.js"></script>
</body>
</html>