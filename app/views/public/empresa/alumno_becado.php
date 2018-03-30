<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="../../../../web/css/material_icons.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../../../../web/css/materialize.min.css" media="screen,projection"/>
<link rel="stylesheet" href="../../../../web/css/style_empresa.css" type="text/css">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Alumno Becado</title>
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
	<li><a href="inicio_empresa.php" class="white-text"><i class="material-icons white-text">home</i>INICIO</a></li>
	<li><a href="casos.php" class="white-text"><i class="material-icons white-text">folder</i>CASOS</a></li>
	<li><a href="becados.php" class="white-text"><i class="material-icons white-text">group</i>ALUMNOS BECADOS</a></li>
	<li><a href="#!" class="white-text"><i class="material-icons white-text">close</i>CERRAR SESIÓN</a></li>
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
<!--ALLUMNOS BECADOS-->
<div class="row">
	<div class="encabezado col l4 offset-l5 m4 offset-m6">
		<h3>Alumnos Becados</h3>
	</div>
	<div class="col l3 offset-l3 m7 offset-m5 s12 ">
		<div id="ind_generales2" class='infor'>
			<img src="../../../../web/img/empresa/icon.png" class="foto" alt="foto">
			<p class="nombre">
				<strong>Jonathan Alexis<br>
				Olmedo Lopez</strong>
			</p>
			<p class="nombre">
				3° Desarrollo de Software
			</p>
			<br>
			<br>
			<br>
			<br>
			<p class="nombre">
				Estado de la beca:
			</p>
			<p class="nombre">
				<strong>Estable</strong>
			</p>
		</div>
	</div>
	<!--COMENTARIO-->
	<div class="col l6 m7 offset-m5 s12 offset-s1">
		<div id="ind_generales" class="chat ash">
			<div class="row">
				<div class="input-field field_2 col l9 s12">
					<textarea id="textarea1" class="materialize-textarea chat_comentario" data-length="120"></textarea>
					<label for="textarea1">Envia un comentario</label>
				</div>
				<button class="btn waves-effect waves-light enviar" type="submit" name="action">Enviar </button>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<a class="waves-effect waves-light btn-large push btn_regresar col l2 offset-l3 m2 offset-m10 s4 offset-s8" href="becados.php">Regresar</a>
</div>
</main>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../../../../web/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../../web/js/materialize.min.js"></script>
<script type="text/javascript" src="../../../../web/js/js_empresa.js"></script>
</body>
</html>