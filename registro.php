<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<link rel="stylesheet" type="text/css" href="css/estilo-registro.css">
		
			<header>
			<div class="wrapper">
				<div class="logo">C.E.E. Erick Boulter</div>
				<div class="menu">
				<nav>
					<a href="index.html">Cerrar sesion</a>
					<a href="menu.php">Menu</a>
					<!--<a href="parallax.php">Agente</a>-->
				</nav>
				</div>
			</div>
</header>

		<body
			
			<center>
			<strong>
			<br>
					
					<br>
					<br>
				<h1>Registrar Estudiante</h1><br>
			</strong>				
			</center><p>
			<form action="valida_foto.php" method="POST" enctype="multipart/form-data">
				<center>
					<table border="1">
						
						<tr bgcolor="#fff">
							<td><strong>Edad:</strong></td><td> <input type="text" name="txtedad" value=""></td>
						</tr>

						<tr bgcolor="#fff">
							<td><strong>Apellido Paterno:</strong></td><td> <input type="text" name="txtap" value=""></td>
						</tr>

						<tr bgcolor="#fff">
							<td><strong>Apellido Materno:</strong></td><td> <input type="text" name="txtam" value=""></td>
						</tr>

						<tr bgcolor="#fff">
							<td><strong>Nombre:</strong></td><td> <input type="text" name="txtnom" value=""></td>
						</tr>

						<tr bgcolor="#fff">
							<td bgcolor="#fff"><strong>Foto</strong></td> <td><input type="file" name="foto" id="foto"></td>
						</tr>

						<tr>
							<td colspan="2" align="center" bgcolor="#fff"><input type="submit" name="enviar" value="Enviar"></td>
						</tr>
						</center>
					</table>
				
			</form>
		</body>
		<br><br>
		
		<br><br>
	
	</head>
</html>