<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="../../../../web/css/material_icons.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../../../../web/css/materialize.min.css" media="screen,projection"/>
<link rel="stylesheet" href="../../../../web/css/style_empresa.css" type="text/css">
<link rel="stylesheet" href="../../../../web/css/footer.css" type="text/css">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Becados</title>
</head>
<body>
<header>
<!--MENU-->
<ul id="slide-out" class="side-nav fixed zona_menu">
	<li>
	<div class="user-view">
		<div class="background">
			<img src="../../../../web/img/empresa/fondo_rical.jpg" alt="fondo_rical">
		</div>
		<a href="#!user"><img class="logo_ricaldone" src="../../../../web/img/empresa/ricaldone.jpg"></a>
		<a href="#!name"><span class="white-text name">Programa de Becas</span></a>
		<a href="#!email"><span class="white-text email">info@ricaldone.edu.sv</span></a>
	</div>
	</li>
	<li><a href="inicio_empresa.php" class="white-text"><i class="material-icons white-text">home</i>Inicio</a></li>
	<li><a href="casos.php" class="white-text"><i class="material-icons white-text">folder</i>Casos</a></li>
	<li><a href="becados.php" class="white-text"><i class="material-icons white-text">group</i>Alumnos becados</a></li>
	<li><a href="#!" class="white-text"><i class="material-icons white-text">close</i>Cerrar Sesión</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">view_stream</i></a>
</header>
<main>
<!--NOTIFICACIONES-->
<div class="row">
	<div class="notificacion col l1 offset-l11 s12 offset-s10">
		<i class="material-icons">notifications</i>
	</div>
</div>
<div class="row">
	<div class="encabezado col l6 offset-l5 m6 offset-m5">
		<h3>Alumnos Becados</h3>
	</div>
</div>
<!--BUSCADOR-->
<div class="row">
	<form class="col l6 offset-l8 m6 offset-m8 s12 offset-s5">
		<div class="row">
			<div class="input-field buscar col s6">
				<i class="material-icons prefix">search</i>
				<input id="icon_prefix" type="text" class="validate">
				<label for="icon_prefix">N° Carnet</label>
			</div>
		</form>
	</div>
	<!--TABLA DE CASOS-->
	<div class="row">
		<div class="tabla_casos col l8 offset-l3 m6 offset-m5 s10 offset-s1">
			<table class="highlight responsive-table bordered" onclick="window.open('alumno_becado.php'); window.close();">
			<tbody>
			<tr>
				<td>
					 Jonathan Olmedo
				</td>
				<td>
					 13/03/2018
				</td>
			</tr>
			</tbody>
			</table>
		</div>
	</div>
	</main>
	<footer class="page-footer color">
    <div class="footer-copyright">
        <div class="container">
            <div  class="row">
                <div class="col l6 offset-l2 s12">
                    © 2018 Instituto Tecnico Ricaldone
                </div>

                <div class="col l4 offset-l5 s12">
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
	<script type="text/javascript" src="../../../../web/js/js_empresa.js"></script>
</body>
</html>