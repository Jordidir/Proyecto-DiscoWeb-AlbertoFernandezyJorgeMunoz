<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>CRUD DE USUARIOS</title>

		<link href="web/css/basico.css" rel="stylesheet" type="text/css" />
		<link href="web/css/botones.css" rel="stylesheet" type="text/css" />
		<link href="web/css/fontface.css" rel="stylesheet" type="text/css" />
		<link href="web/css/formularios.css" rel="stylesheet" type="text/css" />
		<link href="web/css/keyframes.css" rel="stylesheet" type="text/css" />
		<link href="web/css/registro.css" rel="stylesheet" type="text/css" />
		<link href="web/css/tablas.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="web/js/funciones.js"></script>
		<script type="text/javascript" src="web/js/jquery.js"></script>
		<script type="text/javascript" src="web/js/funcionesJQUERY.js"></script>

		<link rel="stylesheet" type="text/css" media="all and (min-width: 475px)" href="web/css/tablet.css"/>
		<link rel="stylesheet" type="text/css" media="all and (min-width: 725px)" href="web/css/pc.css"/>

		<link rel="icon" type="image/png" href="web/img/favicono.ico"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true"/>
		<meta name="apple-mobile-web-app-capable" content="YES"/>
		<meta name="description" content="Disco web">
		<meta name="author" content="Alberto Fernández Gálvez y Jorge Muñoz Feito">
		<meta name="keywords" content="Nube, disco, almacenamiento, web, archivo">
	</head>
	<body>
		<main id="container">
			<header id="header">
				<h1>MI DISCO EN LA NUBE</h1><h2>- Modelo 1.0 -</h2>
				<br>
				<img src="web/img/facebook.png" onClick="window.location.href='https://www.facebook.com'"> 
				<img src="web/img/youtube.png" onClick="window.location.href='https://www.youtube.com'">
				<img src="web/img/instagram.png" onClick="window.location.href='https://www.instagram.com'">
				<img src="web/img/twitter.png" onClick="window.location.href='https://twitter.com'">
				<br>
				<img id="luzIcono" src="web/img/light.png" onClick=apagaLuces();>
				<a href="web/pdf/guiaProyecto-informeMejoras.pdf"><img id="ayudaIcono" src="web/img/help.png" ></a>
				<img id="refrescarIcono" src="web/img/refresh.png" onclick="location.reload()">
			</header>
			<section id="content">
				<?= $contenido ?>
			</section>
		</main>
		<footer id="piePagina">
			<li>Alberto Fernández Gálvez</li>
			<li><a href="mailto:albertofer1997@gmail.com">albertofer1997@gmail.com</a></li>
			<br>
			<li>Jorge Muñoz Feito</li>
			<li><a href="mailto:jomufe7@gmail.com">jomufe7@gmail.com</a></li>
			<br>
			<img src="web/img/copy2.png">
		</footer>
	</body>
</html>