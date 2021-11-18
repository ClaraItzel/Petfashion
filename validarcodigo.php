<?php
$conexion = mysqli_connect("localhost", "root", "", "petfashion");
$codigo=$_POST["codigo"];

$validar_codigo = mysqli_query($conexion, "SELECT * FROM promociones where codigo='$codigo'");
if (mysqli_num_rows($validar_codigo) > 0) {
    
    $num_rows=$validar_codigo->num_rows;
    $validar_codigo->data_seek(0);

    $row=$validar_codigo->fetch_assoc();
    $desc=$row["descuento"];

    $status=1;
    $arreglo= array(    //Para intercambiar datos con el JS se hace en forma de array 
         "status" => $status,
         "descuento" => $desc
    );
    
     echo json_encode($arreglo);  // Se envía la informacion en forma de objeto JSON
    exit();
}else{
    $desc=0;
    $status=0;
    $arreglo= array(
        "status" => $status,
        "descuento" => $desc
   );
   echo json_encode($arreglo); 
    exit();
}
