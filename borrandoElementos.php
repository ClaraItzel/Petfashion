<?php
$carro=$_POST["carrito"];
$conexion = mysqli_connect("localhost", "root", "", "petfashion");
$sql="DELETE FROM carrito WHERE id_carro ='".$carro."'";
$result=$conexion->query($sql);
if ($result===false) {
    trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
  }else{
      echo json_encode($carro);
  }
?>