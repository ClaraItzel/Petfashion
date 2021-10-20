<?php
$conexion = mysqli_connect("localhost", "root", "", "facturacion");
session_start();
$correo= $_SESSION['usuario'];
$sql= "SELECT * FROM usuarios where correo='$correo'";
$result=$conexion->query($sql);

?>

<!doctype html>
<html lang="es">
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
    <link type="text/css" rel="stylesheet" href="../assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css">
    <link rel="preload" href="/assets/img/s-1.jpg" as="image">
    <title>PetsFasion</title>
  </head>
  <body>

  <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <img class="mr-3" src="/assets/img/huella.png" height="40px" alt="">
  <a class="navbar-brand letra" href="index.php"> <h3> Petfashion </h3> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link enlances-nav" href="#QuienesSomos">Identidad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link enlances-nav" href="#">Tienda</a>
      </li>
      <li class="nav-item enlances-nav">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      <li class="nav-item enlances-nav">
        <a class="nav-link" href="#">A cerca de</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">

    <?php

                    if(isset($_SESSION["usuario"])){
                        echo'
                        <li class="nav-item dropdown mr-5">
        <a class="nav-link dropdown-toggle enlances-nav" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="mr-3" src="/assets/img/gato-manchado.png" alt="" height="30px">'
        .$_SESSION["usuario"].
        '</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item enlances-nav" id="popup" href="#tienda">Modificar Perfil</a>
          <a class="dropdown-item enlances-nav" href="#">Carrito</a>
          <a class="dropdown-item enlances-nav" href="#">Mis facturas</a>
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
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slide1"></div>
            <div class="carousel-caption d-md-block color flex">
                <h1>Mis facturas</h1>
                <p>Aquí podrás consultar todo lo relacionado con tus facturas</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="slide2"></div>
            <div class="carousel-caption d-md-block color flex">
                <h1>Sea Bienvendio a PetFashion</h1>
                <p>Dirigido a aquellas personas que les gusta consentir a sus animales</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="slide3"></div>
            <div class="carousel-caption  d-md-block color flex">
                <h1>Sea Bienvendio a PetFashion</h1>
                <p>¡Para dueños y mascotas felices! Tu mascota al último ladrido de la moda</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icono_carrusel" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon icono_carrusel" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </header>
    

  <main class="container"> 
            <form action="accion.php" method="POST">
               
            <h3 class="centrar-texto"></h3>
                <div class="directorio-bg">
                    
                </div>
                <form class="formulario" action="accion.php" method="POST">
                    <h1 class="center">Factura</h1>
                    
                    </div>
                    <div class="campo">
                        <label class="campo__label" for="HorayFecha"><p> Numero ticket </p></label>
                            <input class="campo__field"
                            type="number" name="ticket" id="ticket" value="" placeholder="Ej. 2">
                        
                    </div>
                    <!--<div class="campo">
                        <label class="campo__label"
                        for="Generacion">RFC emisor</label>
                            <input class="campo__field"
                            type="text" name="rfcEmi" id="rfc" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion">Empresa</label>
                            <input class="campo__field"
                            type="text" name="empresa" id="empresa" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>-->
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion"><p>RFC cliente</p></label>
                            <input class="campo__field"
                            type="text" name="rfcCli" id="rfcCli" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion"><p>Correo cliente</p></label>
                            <input class="campo__field"
                            type="text" name="correo" id="correo" value="" placeholder="Ej. correo@dominio.com">
                        
                    </div>
                    <!--<div class="campo">
                        <label class="campo__label"
                        for="Generacion">Nombre Completo</label>
                            <input class="campo__field"
                            type="text" name="Nombre" id="Nombre" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion">Fecha emision</label>
                            <input class="campo__field"
                            type="date" name="fecha" id="fecha" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion">Tipo de comprobante</label>
                            <input class="campo__field"
                            type="text" name="comprobante" id="comprobante" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Regimen Fiscal</label>
                        <input class="campo__field"
                        type="text" name="regimen" id="regimen" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Clave producto</label>
                        <input class="campo__field"
                        type="text" name="c_producto" id="c_producto" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Cantidad</label>
                        <input class="campo__field"
                        type="text" name="cantidad" id="cantidad" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">descripcion</label>
                        <input class="campo__field"
                        type="text" name="descripcion" id="descripcion" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Valor Unitario</label>
                        <input class="campo__field"
                        type="text" name="v_unitario" id="v_unitario" value="" placeholder="Ej. correo@correo.com">
                    </div>-->
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta"><p> Forma de pago</p></label>
                        <input class="campo__field"
                        type="text" name="pago" id="pago" value="" placeholder="Ej. Pago en efectivo/ tarjeta de debito">
                    </div>
                    <!--<div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Sello digital</label>
                        <input class="campo__field"
                        type="text" name="sello" id="sello" value="" placeholder="Ej. correo@correo.com">
                    </div>-->
                    <div class="campo mt-5">
                       
                            <input type="submit" class="boton boton--secun" value="Crear factura">
                    </div>
                    
            
                </form>
            
        </main>
        <footer>
          <div class="footer">
            <div class="mx-5 mt-5 grid">
              <div class="foot__imagen">
                <img src="/assets/img/huella.png" height="80px" alt="">
                <h3 class="mt-4 ml-3 blanco">PetFasion</h3>
              </div>
              <div class="redes">
                <div class="redes__titulo center">
                  <h5 class="blanco">Síguenos en:</h5>
                </div>
                <div class="redes__imagenes">
                  <img src="/assets/img/facebook.png" class="mr-4" height="40px" alt="">
                  <img src="/assets/img/linkedin.png" class="mr-4" height="40px" alt="">
                  <img src="/assets/img/whatsapp.png"  class="mr-4" height="40px" alt="">
                  <img src="/assets/img/instagram.png"  class="mr-4" height="40px" alt="">
                </div>
               
              </div>
              <div class="terminos mt-4 ">
                <a href="#" > <p class="footer-enlaces mb-4">Condiciones de compra y verificación </p> </a>
                <a href="#" class="footer-enlaces mb-5"> <p class="footer-enlaces"> Aviso legal y
                  políticas de privacidad</p></a>
              </div>
            </div>
            
          </div>
        </footer>
        <!--Popup-->
        
        <div class="overlay inactive mt-5" id="overlay">
        <div class="popup container" id="overpop">
            <a href="#" id="btn_cerrar" class="cerrar_popup"><img src="/assets/img/boton-cerrar.png" alt=""></a>
            <h3 class="center">Modulo de cambios</h3>
            <p class="center">Aquí puedes actualizar tu información</p>
            <form action="modulosCambios.php" class="form-overlay" method="POST">
            <div class="contenedor-inputs">
            <?php
         if(isset($_SESSION["usuario"])){
        if ($result===false) {
          trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
        }else{
          $num_rows=$result->num_rows;
            $result->data_seek(0);
            while ($row=$result->fetch_assoc())
            {
             /*  echo"<script>
              alert('".$row["nombre"]."');
                  </script>"; */
            echo'
      
            <input class="campo__field"
                 type="text" name="nombre" id="cantidad" value="'.$row["nombre"].'" placeholder="Nombre">
                 <input class="campo__field"
                 type="text" name="prim_ape" id="primer_ape" value="'.$row["prim_ape"].'" placeholder="Primer Apellido">
                 <input class="campo__field"
                        type="text" name="seg_ape" id="seg_ape" value="'.$row["seg_ape"].'" placeholder="Segundo Apellido">
                        <input class="campo__field"
                        type="email" name="correo" id="correo" value="'.$row["correo"].'" placeholder="Correo">
                        <input class="campo__field"
                        type="text" name="direccion" id="direccion" value="'.$row["direccion"].'" placeholder="Direccion">
                        <input class="campo__field"
                        type="text" name="telefono" id="direccion" value="'.$row["telefono"].'" placeholder="telefono">
                        <input class="campo__field"
                        type="text" name="rfc" id="rfc" value="'.$row["rfc"].'" placeholder="rfc">
                        <input class="campo__field"
                        type="password" name="password" id="password" value="" placeholder="password">
                </div>  
            ';

            }
        }
      }
        ?>

            </div>
            
            <div class="flex container mt-5">
              <input type="submit" class="btn_submit boton w-60" value="Actualizar">
            </div>
              
            
                    
    </div>   
                        
                        
                        
                        
                        
                        
              </form>
            </div>
            
        </div>
        <script src="/assets/js/emergente.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>