<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['eliminar'];
$consulta="DELETE FROM cita WHERE id = ";

mysqli_query($conexion, $consulta. $registroEliminado);
mysqli_close($conexion);
header('Location: eliminarUsuario.php');
?>