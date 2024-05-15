
<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

// Assuming you've sanitized your inputs to prevent SQL injection
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$phone = mysqli_real_escape_string($conexion, $_POST['phone']);
$fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
$descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
$id_actualizar = mysqli_real_escape_string($conexion, $_POST['actualizar']);

mysqli_query($conexion, "UPDATE cita 
                        SET       
                            nombre = '$nombre',
                            email = '$email',
                            phone = '$phone',
                            fecha = '$fecha',
                            descripcion = '$descripcion'
                        WHERE  id =  '$id_actualizar'");

echo "<br> <h1>Usuario actualizado con éxito</h1>";
echo "<a href='./verCita.php'>Regresar</a>";
?>