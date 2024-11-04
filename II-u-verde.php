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

		<!--BOTONES DE ESPECIFICOS DE COLORES -->

		<script>
			var bleep8=new Audio();
			bleep8.src="audio/azul.mp3";
		</script>
		<script>
			var bleep9=new Audio();
			bleep9.src="audio/amarillo.mp3";
		</script>
		<script>
			var bleep10=new Audio();
			bleep10.src="audio/cafe.mp3";
		</script>
		<script>
			var bleep11=new Audio();
			bleep11.src="audio/lila.mp3";
		</script>
		<script>
			var bleep12=new Audio();
			bleep12.src="audio/negro.mp3";
		</script>
		<script>
			var bleep13=new Audio();
			bleep13.src="audio/naranja.mp3";
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
							echo " ";
						}
						echo "Elegiste el color VERDE ..." .$_SESSION['nombreUsuario'];
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
					<a href="menu.php">Indice</a>
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
						<a href="II-u-verde.php"onmousedown="bleep.play()"><img src="img/bt-1-verde.jpg" width="32%"></a>
					</div>
					<div class="aa2">
						<a href="II-u-rojo.php"onmousedown="bleep1.play()"><img src="img/bt-1-rojo.jpg" width="32%"></a>
					</div>
					<div class="aa3">
						<a href="II-u-azul.php"onmousedown="bleep2.play()"><img src="img/bt-1-azul.jpg" width="32%"></a>
					</div>
					<div class="aa4">
						<a href="II-u-amarillo.php"onmousedown="bleep3.play()"><img src="img/bt-1-amarillo.jpg" width="32%"></a>
					</div>
					<div class="aa5">
						<a href="II-u-cafe.php"onmousedown="bleep4.play()"><img src="img/bt-1-cafe.jpg" width="32%"></a>
					</div>
					<div class="aa6">
						<a href="II-u-lila.php"onmousedown="bleep5.play()"><img src="img/bt-1-lila.jpg" width="32%"></a>
					</div>
					<div class="aa7">
						<a href="II-u-negro.php"onmousedown="bleep6.play()"><img src="img/bt-1-negro.jpg" width="32%"></a>
					</div>
					<div class="aa8">
						<a href="II-u-naranja.php"onmousedown="bleep7.play()"><img src="img/bt-1-naranja.jpg" width="32%"></a>
					</div>
				
			</div>
			<div class="bb">
				<div class="b1">					
						<a href="#"onmousedown="bleep8.play()"><img src="img/bt-v-hoja.png" width="30%"></a>					
						<a href="#"onmousedown="bleep9.play()"><img src="img/bt-v-lagarto.png" width="30%"></a>					
						<a href="#"onmousedown="bleep10.play()"><img src="img/bt-v-medias.png" width="30%"></a>					
						<a href="#"onmousedown="bleep11.play()"><img src="img/bt-v-pantalon.png" width="30%"></a>					
						<a href="#"onmousedown="bleep12.play()"><img src="img/bt-v-sapo.png" width="30%"></a>					
						<a href="#"onmousedown="bleep13.play()"><img src="img/bt-v-tortuga.png" width="30%"></a>	
				</div>

				<div class="b2">
					<div class="1">
						<img src="img/agente.png" width="37%">
					</div>
					<div class="2">
						<h2>Escucha <wbr> nuevamente <wbr> ... </h2>
						<audio controls autoplay width="20%" heigth="20%">
						<source src="audio/verde.mp3">
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