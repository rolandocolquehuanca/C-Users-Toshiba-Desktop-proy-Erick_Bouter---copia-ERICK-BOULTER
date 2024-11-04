<!DOCTYPE html>

<html lang="es"> <!--xmlns="http://www.w3.org/1999/xhtml">-->
<head>
	<meta charset="utf-8"/>
	<title>Indice</title>
	<link rel="stylesheet" type="text/css" href="css/estilo-alumnos.css">
	<!--<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,300,600,700' rel="stylesheet" type="text/css">-->
</head>
<header>
			<div class="wrapper">
				<div class="logo">C.E.E. Erick Boulter</div>
				<div class="menu">
				<nav>
					<a href="index.html">Cerrar sesion</a>
					<!--<a href="parallax.php">Agente</a>-->
				</nav>
				</div>
			</div>
</header>

	<h1>Estudiantes registrados</h1>

		<div class="alumnos">
			<?php
				require_once'conexion.php';
				$sql=mysql_query("select * from foto");
				while ($res= mysql_fetch_array($sql)) {
					echo $res["nombre"]."<dt>";
					echo $res["apellido_pat"]."<br>";
					echo '<a href="menu.php"><img src="'.$res["foto"].'" width="13%" height="13%"></a><br><br><br>';
				}
			?>
		</div>


</html>