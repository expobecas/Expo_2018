<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="../../../../web/css/material_icons.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../../../../web/css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="../../../../web/css/css1.css" type="text/css">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
	<!--MENU-->
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
	<li><a href="becados_jefes.php" class = "white-text"><i class="material-icons white-text">folder</i>Becas</a></li>
	<li><a href="expediente_jefe.php" class = "white-text"><i class="material-icons white-text">folder</i>Casos</a></li>
	<li><a href="patrocinador_jefe.php" class = "white-text"><i class="material-icons white-text">group</i>Patrocinadores</a></li>
	<li><a href="login_jefe.php" class = "white-text"><i class="material-icons white-text">close</i>Cerrar Sesión</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">view_stream</i></a>
</header>
<main>
<div class="row">
		<!--NOTIFCACIONES-->
	<div class="notificacion col l1 offset-l11">
		<i class="material-icons">notifications</i>
	</div>
</div>
	<!--EXPEDIENTE-->
<div class="row">
	<section class="expediente col l8 offset-l3 m10 offset-m1 s12">
	<p>
		Carnet:<strong> 2016023</strong>
	</p>
	<p>
		Nombre:<strong> Jonathan Olmedo</strong>
	</p>
	<h5>Caso 123</h5>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</p>
	<div class="slider col l7 offset-l2">
		<ul class="slides">
			<li>
			<img src="https://lorempixel.com/580/250/nature/1">
			<!-- random image -->
			</li>
			<li>
			<img src="https://lorempixel.com/580/250/nature/2">
			<!-- random image -->
			</li>
			<li>
			<img src="https://lorempixel.com/580/250/nature/3">
			<!-- random image -->
			</li>
			<li>
			<img src="https://lorempixel.com/580/250/nature/4">
			<!-- random image -->
			</li>
		</ul>
	</div>
		<!--BOTON PATROCINADOR-->
	<a class="waves-effect waves-light btn-large push btn_patrocinar col l2 offset-l10 m2 offset-m10 s4 offset-s8">Patrocinar</a>
	</section>
</div>
	<!--BOTON REGRESAR-->
<div class="row">
	<a class="waves-effect waves-light btn-large push btn_regresar col l2 offset-l3 m2 offset-m10 s4 offset-s8">Regresar</a>
</div>
</main>

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