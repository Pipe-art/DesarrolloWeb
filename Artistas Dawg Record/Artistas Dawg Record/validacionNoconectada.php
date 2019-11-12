<?php
$usuario=$_post['usuario'];
$clave=$_post['clave'];

$conexion=mysql_connect("localhost","root","","bdProyecto");
$consulta="SELECT * FROM USUARIOS WHERE USUARIO ='$usuario' and clave='$clave'";
$resultado=mysql_query($conexion,$consulta);

$filas=mysql_num_rows($resultado);

if ($filas>0) {
	header("location:Index.html");
}
else  {

	echo "Error en la autentificacion";
}
mysql_free_result($resultado);
mysql_close($conexion);