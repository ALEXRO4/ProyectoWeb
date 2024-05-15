<?php
// se usa el requiere para si psi se necesita el archivo conexion
require "conexion.php";
mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM cita";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        
        <th>N cita</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Fecha de registro</th>
        <th>Fecha de cita</th>
        <th>Notas</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
    
     echo "<tr>";
     echo"<td>". $row['id'] ."</td>";
  
     echo"<td>". $row['nombre'] ."</td>";
     echo"<td>". $row['email'] ."</td>";
     echo"<td>". $row['phone'] ."</td>";
     echo"<td>". $row['fecha_registro'] ."</td>";
     echo"<td>". $row['fecha'] ."</td>";
     echo"<td>". $row['descripcion'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }



?>
