<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['eliminar'];
$consulta="DELETE FROM cita WHERE id = ";

mysqli_query($conexion, $consulta. $registroEliminado);
mysqli_close($conexion);
header('Location: eliminarUsuario.php');


echo "<br> <h1>Usuario eliminiado con exito</h1>";
echo "<a href='./index.php'>Puedes generar un Nuevo registro</a>";
?>