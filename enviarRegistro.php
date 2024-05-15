<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');



    mysqli_query($conexion,"INSERT INTO cita ( nombre, email, phone, fecha, descripcion )
        VALUES(
            
            '$_POST[nombre]',
            '$_POST[email]',
            '$_POST[phone]',
            '$_POST[fecha]',
            '$_POST[descripcion]'

        )");
        echo "<br> <h1>Cita creada con exito</h1>";
        echo "<a href='./index.php'>Puedes generar un Nuevo registro</a>";


