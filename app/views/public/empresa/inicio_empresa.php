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
<title>Inicio</title>
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
	<div class="notificacion col l1 offset-l10 s12 offset-s10">
		<ul><li><a href=""><i class="material-icons">notifications</i><span class="new badge">4</span></a></li></ul>
	</div>
</div>
<div class="row">
	<div class="encabezado col l4 offset-l3 m4 offset-m1">
		<p><strong>Información General</strong></p>
	</div>
	<!--INFORMACION-->
	<div class="col l8 offset-l3 m7 offset-m3 s8 offset-s3">
		<div id="ind_generales" class="z-depth-5">
			<h5 class="titulo"><strong>Programa de Becas</strong></h5>
			<p>
				 El Instituto Técnico Ricaldone a través del Programa de Becas asigna a cada estudiante <br>
				 una cuota acorde a su situacion económica actual. <br>
				 Para más información o consultas, puede llamar al Departamento de Trabajo Social a los números: <br>
				<strong>- 2234-6010 (directo)</strong><br>
				<strong>- 2234-6000 (conmutador)</strong>
			</p>
		</div>
	</div>
</div>
<!--NOTAS-->
<div class="row">
	<div class="col l5 push-l3 m7 push-m3 s8 push-s3">
		<div id="notas" class="z-depth-5 ">
			<section class="background_titulo">
			<h6 class="titulo_2"><strong>NOTA</strong></h6>
			</section>
			<p>
				 Todos los datos proporcionados por la solicitus, serán verificados mediante mecanismos confiables definidos por la institución. Incluyendo la visita domiciliar; en el caso de encontrar inconsistencia, falta de información o y de documentos que den fe de su situación economica real. el ITR se reserva el derecho de tomar medidas correspondientes en relación a la asignación de su cuota. <br>
				 En el transcurso del proceso de la formación académica, la cuota podrá tener modificaciones debido a politicas internas de la institución.
			</p>
		</div>
	</div>
	<!--CONTADOR-->
	<div class="col l3 push-l3 m7 offset-m3 s8 offset-s3">
		<div id="contador_b" class="z-depth-5">
			<div class="contador_becados">
				<p>
					<img src="../../../../web/img/empresa/contador_b.png" alt="contador_img">Alumnos Becados: <strong>1</strong>
				</p>
			</div>
		</div>
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