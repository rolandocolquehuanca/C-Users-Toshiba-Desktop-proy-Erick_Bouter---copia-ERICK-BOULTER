<?php
require_once 'alumnos.php';
$edad=$_REQUEST["txtedad"];
$ap=$_REQUEST["txtap"];
$am=$_REQUEST["txtam"];
$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
mysql_query("insert into foto (edad,apellido_pat,apellido_mat,nombre,foto) values('$edad','$ap','$am','$nom','$destino')");
header("Location: alumnos.php");
?>