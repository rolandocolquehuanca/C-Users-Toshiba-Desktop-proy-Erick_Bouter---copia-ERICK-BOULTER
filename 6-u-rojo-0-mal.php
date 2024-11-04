<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Prueba</title>
		<meta name="utf-8"/>
		<meta name="description" content="description"/>
		<link rel="stylesheet" type="text/css" href="css/estilo-U1.css"/>
	</head>

	<body>
		<header>
			<div class="wrapper">
				<div class="logo">
					<div class="nom1">
						<?php
						session_start();
						error_reporting(0);

						$varSesion = $_SESSION['nombreUsuario'];
						if ($varSesion == null || $varSesion=='') {
							echo " ";
						}
						echo "No es el color naranja intenta nuevamente..." .$_SESSION['nombreUsuario'];
					?>
					</div>
					<!--<div class="nom2">
						<?php
						session_start();
						error_reporting(0);

						$varSesion = $_SESSION['nombreUsuario'];
						if ($varSesion == null || $varSesion=='') {
							echo " ";
						}
						echo " " .$_SESSION['nombreUsuario'];
					?>-->
					</div>
					<div class="menu">
				<nav>
					<!--<a href="unidad4b.php">Siguiente</a>-->
					<a href="menu.php">Indice</a>
					<a href="index.html">Cerrar <wbr>Sesion </a>
				</nav>
				</div>
				</div>
				
			</div>
		</header>
		<section id="contenedor">
			<div class="aa">
				<!--<div class="a1">
					<audio src="audio/1.mp3" preload="auto" controls></audio>
				</div>-->
				<div class="a2">
					<img src="img/seis-rojo.png" width="100%">
				</div>
			</div>
			<div class="bb">
				<div class="b1">
					<a href="6-u-azul-0-bien.php"><img src="img/bt-azul.jpg" width="26%"></a>
					<a href="6-u-verde-0-mal.php"><img src="img/bt-verde.jpg" width="26%"></a>
					<a href="6-u-rojo-0-mal.php"><img src="img/bt-rojo.jpg" width="26%"></a>
				</div>
				</div>

				<div class="b2">
					<img src="img/agente.png" width="50%">
					<div class="b22">
					<audio controls autoplay width="20%" heigth="20%">
						<source src="audio/escoge-color-azul-6.mp3">
					</audio>
					<!--<audio src="audio/1.mp3" preload="auto" controls></audio>-->
					</div>
				</div>
				<!--<div class="cc">
				<img src="img/agente.png" width="100%">
			</div>-->
			
			
		</section>
		<!--<video id="video1" loop autoplay preload poster="images/poster.png">
	        <source src="videos/video1.mp4" type="video/mp4" />
	        <source src="videos/video1.webm" type="video/webm" />
	        <source src="videos/video1.ogv" type="video/ogg" />
	    </video>-->
	</body>
	<div class="barra"><img src="img/barra.jpg" width="100%"></div>
	<center>
	<div class="numeros" width="50%">
	
		<a href="0-u-azul-0-mal.php"><img src="img/0.jpg" width="7.3%"></a>
		<a href="1-u-amarillo-0-mal.php"><img src="img/1.jpg" width="7.3%"></a>
		<a href="2-u-naranja-0-mal.php"><img src="img/2.jpg" width="7.3%"></a>
		<a href="3-u-azul-0-mal.php"><img src="img/3.jpg" width="7.3%"></a>
		<a href="4-u-lila-0-mal.php"><img src="img/4.jpg" width="7.3%"></a>
		<a href="5-u-rojo-0-mal.php"><img src="img/5.jpg" width="7.3%"></a>
		<a href="6-u-verde-0-mal.php"><img src="img/6.jpg" width="7.3%"></a>
		<a href="7-u-lila-0-mal.php"><img src="img/7.jpg" width="7.3%"></a>
		<a href="8-u-amarillo-0-mal.php"><img src="img/8.jpg" width="7.3%"></a>
		<a href="9-u-azul-0-mal.php"><img src="img/9.jpg" width="7.3%"></a>

	</div>	
	</center>
</html>