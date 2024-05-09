<?php
$user_db="root";
$pass_db="";
$db_name="velocimotor";
$host_db="localhost: 3306";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion peto: ".$conexion->connect_error);
}

?>