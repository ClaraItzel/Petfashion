<?php
    $conexion = mysqli_connect("localhost", "root", "", "petfashion");
$carro=$_POST["precio_carrito"];
$id_carro=$_POST["id_carro"];
$cantidad=$_POST["cantidad"];
$precio_total= $carro*$cantidad;
$sql= "UPDATE carrito set Cantidad='$cantidad', PrecioTotal='$precio_total'
where id_carro='$id_carro'";
$result=$conexion->query($sql);
if ($result===false) {
    trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
  }else{
    echo json_encode($id_carro);
  }

?>
