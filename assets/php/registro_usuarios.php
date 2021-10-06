<?php


    include 'conexion.php';
$nombre = $_POST["nombre"];
$prim_ape = $_POST["prim_ape"];
$seg_ape = $_POST["seg_ape"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$rfc = $_POST["rfc"];
$password = $_POST["password"];
//Se encripto la contraseña 
$password_encriptada= MD5($password);

    $query="INSERT INTO usuarios(id,nombre, prim_ape, seg_ape,correo,direccion,telefono,rfc,password)
            VALUES('','$nombre','$prim_ape','$seg_ape','$correo','$direccion','$telefono','$rfc','$password_encriptada')";

//Verficar que el correo no este repetido en la BD
$verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios where correo='$correo'");
# code...
if (mysqli_num_rows($verificar_correo) >0) {
    echo"<script>
        alert('EL USUARIO YA HA SIDO REGISTRADO, INTENTA CON OTRO CORREO');
        location.href='../../login.php';
    </script>";
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo"<script>
        alert('El usuario fue registrado exitosamente');
        location.href='../../login.php';
    </script>";
    }else{
        echo"<script>
        alert('USUARIO NO REGISTRADO');
        location.href='../../login.php';
    </script>";
    }
    
    mysqli_close($conexion);

    ?>
