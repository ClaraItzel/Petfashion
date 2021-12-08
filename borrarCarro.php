<?php
    $conexion = mysqli_connect("localhost", "root", "", "petfashion");
    session_start();
    $correo= $_SESSION['usuario'];
    $sql= "SELECT * FROM usuarios where correo='$correo'";
    $result=$conexion->query($sql);
    if ($result===false) {
        trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
      }else{
        $num_rows=$result->num_rows;
            $result->data_seek(0);
            while ($row=$result->fetch_assoc())
            {
                
                 $sql2="DELETE FROM carrito WHERE id_usuario ='".$row["id_usuario"]."'";
                $result2=$conexion->query($sql2);
                if ($result2===false) {
                    trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
                  }else{
                      
                  } 
            }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Favico-->
        <link rel="shortcut icon" type="image/x-icon" href="pet.ico">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!--Fuentes externas-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,100;1,300;1,700&family=Lobster+Two:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet"> 
        <!--Css-->
        <link type="text/css" rel="stylesheet" href="/assets/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="/petfashion(2)/assets/css/style.css">
        <link rel="preload" href="/petfashion(2)/assets/img/s-1.jpg" as="image">
        <title>PetsFasion</title>
      </head>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <img class="mr-3" src="/assets/img/huella.png" height="40px" alt="">
  <a class="navbar-brand letra" href="index.php"> <h3> Petfashion </h3> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link enlances-nav" href="contacto.php">Sobre nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link enlances-nav" href="catalogo.php">Tienda</a>
      </li>
      <li class="nav-item enlances-nav">
        <a class="nav-link" href="contacto2.php">Contacto</a>
      </li>
      <li class="nav-item enlances-nav">
        <a class="nav-link" href="acercade.php">Identidad</a>
      </li>

     
    </ul>
    <form class="form-inline my-2 my-md-0">

    <?php

                    if(isset($_SESSION["usuario"])){
                        echo'
                        <li class="nav-item dropdown mr-5 lista">
        <a class="nav-link dropdown-toggle enlances-nav" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="mr-3" src="/assets/img/gato-manchado.png" alt="" height="30px">'
        .$_SESSION["usuario"].
        '</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item enlances-nav" id="popup" href="#tienda">Modificar Perfil</a>
          <a class="dropdown-item enlances-nav" href="mostrarCarro.php">Carrito</a>
          <a class="dropdown-item enlances-nav" href="factura.php">Mis facturas</a>
          <a class="dropdown-item enlances-nav" href="cerrarSesion.php">Cerrar Sesión</a>
        </div>
      </li>
                        ';
                    }
                    else{
                    echo '
                    <a class="nav-link enlances-nav" href="login.php">Inicia Sesión</a>
                  ';
                    }
                    ?>
    <!--   <li class="nav-item dropdown mr-5">
        <a class="nav-link dropdown-toggle enlances-nav" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="/assets/img/gato-manchado.png" alt="" height="30px">
          John Doe
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item enlances-nav" href="#">Modificar Perfil</a>
          <a class="dropdown-item enlances-nav" href="#">Carrito</a>
          <a class="dropdown-item enlances-nav" href="cerrarSesion.php">Cerrar Sesión</a>
        </div>
      </li> -->
    </form>
  </div>
</nav>
<div class="container grid-gracias mt-5">
    <div class="imagen mt-5">
        <img src="/petfashion(2)/assets/img/gato.webp" alt="">
    </div>
    <div class="info">
        <h1>¡Muchas gracias por su compra!</h1>
    <p>La fecha estimada de llegada de su producto es  12/12/2021</p>
    <h6>
        Para cualquier duda no dudes en mandarnos un mensaje haciendo <a href="contacto2.php"> click aquí</a>
    </h6>
    <h6>
        Si desea seguir viendo nuestros productos lo invitamos seguir navegando en <a href="catalogo.php">nuestro catalogo </a>
    </h6>

    </div>
    
</div>
<?php
        include("footer.php")
        ?>
</body>
</html>