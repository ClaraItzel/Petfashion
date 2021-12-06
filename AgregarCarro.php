<?php
    $conexion = mysqli_connect("localhost", "root", "", "petfashion");
    session_start();
    $correo= $_SESSION['usuario'];
    $sql= "SELECT * FROM usuarios where correo='$correo'";
    $result=$conexion->query($sql);


$precio = $_POST["pr"];
$descripcion = $_POST["descripcion"];
$id_producto = $_POST["id_producto"];
$cantidad = $_POST["cantidad"];

if ($result===false) {
    trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
  }else{
    $num_rows=$result->num_rows;
    $result->data_seek(0);

    $row=$result->fetch_assoc();
    $user= $row['id_usuario'];
    $sql2= "INSERT INTO carrito(id_carro,id_usuario, id_producto, Cantidad,PrecioTotal)
    VALUES('','$user','$id_producto','$cantidad',$precio)";
    $result2=$conexion->query($sql2);
    if ($result===false) {
        trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
    }else{
        echo'hola';
    }

 
    
}

?>