<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Prueba</title>
		<meta name="utf-8"/>
		<meta name="description" content="description"/>
		<link rel="stylesheet" type="text/css" href="css/estilo-U4.css"/>
		<script>
			var bleep=new Audio();
			bleep.src="audio/verde.mp3";
		</script>
		<script>
			var bleep1=new Audio();
			bleep1.src="audio/rojo.mp3";
		</script>
		<script>
			var bleep2=new Audio();
			bleep2.src="audio/azul.mp3";
		</script>
		<script>
			var bleep3=new Audio();
			bleep3.src="audio/amarillo.mp3";
		</script>
		<script>
			var bleep4=new Audio();
			bleep4.src="audio/cafe.mp3";
		</script>
		<script>
			var bleep5=new Audio();
			bleep5.src="audio/lila.mp3";
		</script>
		<script>
			var bleep6=new Audio();
			bleep6.src="audio/negro.mp3";
		</script>
		<script>
			var bleep7=new Audio();
			bleep7.src="audio/naranja.mp3";
		</script>
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
							echo "Error 404, por favor hable con su administrador";
						}
						echo "Muy bien vas por buen camino...  " .$_SESSION['nombreUsuario'];
					?>
					</div>
					<!--<div class="nom2">
						<?php
						session_start();
						error_reporting(0);

						$varSesion = $_SESSION['nombreUsuario'];
						if ($varSesion == null || $varSesion=='') {
							echo "Error 404, por favor hable con su administrador";
						}
						echo "Muy bien vas por buen camino...  " .$_SESSION['nombreUsuario'];
					?>-->
					</div>
					<div class="menu">
				<nav>
					<a href="unidad1-1.php">Indice</a>
					<a href="index.html">Cerrar <wbr>Sesion </a>
				</nav>
				</div>
				</div>
				
			</div>
		</header>
		<section id="contenedor">
			<div class="aa">				
					<h1><img src="img/bt-titulo.png" width="67%"></h1>
					<div class="aa1">
						<a href="#"onmousedown="bleep.play()"><img src="img/bt-1-verde.jpg" width="32%"></a>
					</div>
					<div class="aa2">
						<a href="#"onmousedown="bleep1.play()"><img src="img/bt-1-rojo.jpg" width="32%"></a>
					</div>
					<div class="aa3">
						<a href="#"onmousedown="bleep2.play()"><img src="img/bt-1-azul.jpg" width="32%"></a>
					</div>
					<div class="aa4">
						<a href="#"onmousedown="bleep3.play()"><img src="img/bt-1-amarillo.jpg" width="32%"></a>
					</div>
					<div class="aa5">
						<a href="#"onmousedown="bleep4.play()"><img src="img/bt-1-cafe.jpg" width="32%"></a>
					</div>
					<div class="aa6">
						<a href="#"onmousedown="bleep5.play()"><img src="img/bt-1-lila.jpg" width="32%"></a>
					</div>
					<div class="aa7">
						<a href="#"onmousedown="bleep6.play()"><img src="img/bt-1-negro.jpg" width="32%"></a>
					</div>
					<div class="aa8">
						<a href="#"onmousedown="bleep7.play()"><img src="img/bt-1-naranja.jpg" width="32%"></a>
					</div>
				
			</div>
			<div class="bb">
				<div class="b1">
					<a href="0-u-naranja-0-mal.php"><img src="img/bt-2-globo.png" width="30%"></a>
					<a href="0-u-naranja-0-mal.php"><img src="img/bt-2-pato.png" width="30%"></a>
					<a href="0-u-naranja-0-mal.php"><img src="img/bt-2-platano.png" width="30%"></a>
					<a href="0-u-naranja-0-mal.php"><img src="img/bt-2-pollo.png" width="30%"></a>
					<a href="0-u-naranja-0-mal.php"><img src="img/bt-2-sol.png" width="30%"></a>
					<a href="0-u-naranja-0-mal.php"><img src="img/bt-2-pato.png" width="30%"></a>
				</div>

				<div class="b2">
					<div class="1">
						<img src="img/agente.png" width="37%">
					</div>
					<div class="2">
						<h2>Escucha <wbr> nuevamente <wbr> ... </h2>
						<audio controls autoplay width="20%" heigth="20%">
						<source src="audio/escoge-un-color.mp3">
					</audio>
					</div>
				</div>
			</div>			
		</section>
		<!--<video id="video1" loop autoplay preload poster="images/poster.png">
	        <source src="video/3.mp4" type="video/mp4" />
	        <source src="video/3.webm" type="video/webm" />
	        <source src="video/3.ogv" type="video/ogg" />
	    </video>-->
	</body>	
</html>