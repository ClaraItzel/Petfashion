<?php
include 'conexion.php';

$correo = $_POST["correo"];
$password = $_POST["password"];
$password_encriptada= MD5($password);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios where correo='$correo' and password='$password_encriptada'");

if (mysqli_num_rows($validar_login) > 0) {
    header("location: ../../index.php");
    exit();
}else{
    echo"<script>
    alert('El usuario no existe, verifique los datos introcidos');
        location.href='../../login.php';
        </script>
    ";
    exit();
}
?>