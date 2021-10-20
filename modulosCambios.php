<?php
    $conexion = mysqli_connect("localhost", "root", "", "petfashion");
$nombre = $_POST["nombre"];
$prim_ape = $_POST["prim_ape"];
$seg_ape = $_POST["seg_ape"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$rfc = $_POST["rfc"];
$password = $_POST["password"];   
$sql= "UPDATE usuarios 
SET nombre='$nombre', prim_ape='$prim_ape', seg_ape='$seg_ape', correo='$correo', direccion='$direccion', telefono='$telefono', rfc='$rfc', password= md5('$password')
where correo='$correo'";
$result=$conexion->query($sql);

if ($result===false) {
    trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
  }else{
    echo"<script>
    alert('Usuario actualizado exitosamente');
        location.href='index.php';
        </script>
    ";
  }

?>
