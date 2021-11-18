<?php
$conexion = mysqli_connect("localhost", "root", "", "petfashion");

$Nombre = $_POST["Nombre"];
$prim_ape = $_POST["prim_ape"];
$seg_ape = $_POST["seg_ape"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"]; 

$insertar= "INSERT INTO mensajes_contacto(nombre,prim_ape,seg_ape,correo,telefono,mensaje)
VALUES('$Nombre', '$prim_ape','$seg_ape','$correo','$telefono','$mensaje')";

$resultado= mysqli_query($conexion,$insertar);

mysqli_close($conexion);
