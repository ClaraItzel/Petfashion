<?php

$nombre= $_Post["nombre"];
$prim_ape = $_Post["prim_ape"];
$seg_ape = $_Post["seg_ape"];
$correo = $_Post["correo"];
$telefono = $_Post["telefono"];
$mensaje = $_Post["mensaje"];

   //$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

  $datos= $nombre.$prim_ape.$seg_ape.$correo.$telefono.$mensaje;

  if (datos($nombre, $prim_ape, $seg_ape, $correo, $telefono, $mensaje)) {
    echo "<p style='font-size:20px;'>El formulario se ha enviado correctamente</p>";
 } else {
    echo "Ha habido un error al enviar el formulario, inténtalo de nuevo por favor";
 }