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
    
    <link type="text/css" rel="stylesheet" href="/assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <title>PetsFasion</title>
  </head>
  <body>
  <header>
    <nav class="fixed-top navbar navbar-expand-sm navbar-dark bg-dark">
        <img src="assets/img/huella.png" alt="" height="40px" style=" margin: 10px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       <!-- -Barra de Navegación (Inicio| Acerca de | Productos | Identidad |
        Contacto  |  Condiciones de compra o contratación | Aviso legal y políticas de privacidad)
        -Identidad (misión, visión, valores y objetivos)-->
        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link mr-3" href="index.php">PetsFashion <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link mr-3" href="acercade.php">Sobre nosotros</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link mr-3" href="catalogo.php">Tienda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link mr-3" href="identidad.html">Identidad <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link mr-3" href="contacto.html">Contacto <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link mr-3" href="login.php">Inicio de sesión <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
        </div>
    </nav>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slide1"></div>
            <div class="carousel-caption d-md-block color flex">
                <h1>Sea Bienvendio a PetsFashion</h1>
                <p>¡Para dueños y mascotas felices! Tu mascota al último ladrido de la moda</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="slide2"></div>
            <div class="carousel-caption d-md-block color flex">
                <h1>Sea Bienvendio a PetsFashion</h1>
                <p>Dirigido a aquellas personas que les gusta consentir a sus animales</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="slide3"></div>
            <div class="carousel-caption  d-md-block color flex">
                <h1>Sea Bienvendio a PetsFashion</h1>
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
    
    
  <img src="assets/img/wave.svg" id="tienda" alt="">
        <section >
        <div class="articulos" id="tienda">
          <h2 class="center titulo mb-4">Compra por categorias</h2>
          <div class="art_tarjetas container">
            <div class="art1__perro art_tar-p">
              <div class="imagen__perro">
                <div class="capa">
                  <h3 class="blanco">Perros</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a href="#">VER MÁS</a>
                </div>
              </div>
            </div>
            <div class="art1__perro"> 
              <div class="imagen__gato">
                <div class="capa">
                  <h3 class="blanco">Gatos</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a href="#">VER MÁS</a>
                </div>
              </div>
            </div>
            <div class="art1__perro">
              <div class="imagen__otros">
                <div class="capa">
                  <h3 class="blanco">Otros</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a href="#">VER MÁS</a>
                </div>
            </div>
          </div>
          </div>
        </div>
        <img src="assets/img/wave2.svg" alt="">
      
    <div class="container">
      <div class="row">
      <?php
        include "assets/php/conexion.php";
        $myconsulta = $conexion->query("select * from productos");
        $filas = $myconsulta->num_rows;
        if ($filas >= 1) {
        while ($lafila = $myconsulta->fetch_assoc()) {
      ?>
          <div class="col-4">
                <div class="card">
                    <img height="300"
                    title="<?php echo $lafila["nombre"]; ?>" 
                    alt="<?php echo $lafila['nombre']; ?>"
                    class="card-img-top" 
                    src="<?php echo $lafila['imagen']; ?>"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="<?php echo $lafila['descripcion']; ?>"
                    >
                    <div class="card-body">
                        <h5><span><?php echo $lafila['nombre']; ?></span></h5>
                        <h6 class="card-title">$<?php echo $lafila['precio_venta']; ?></h6>
                        <!--<p class="card-text">Descripcion</p>-->
                  
                    <button class="btn btn-primary" 
                        name="btnAccion" 
                        value="agregar" 
                        type="submit">Agregar al carrito</button>
                    </form>
                    </div>
                </div>
          </div>
          <?php
            } //fin del while
        }
        ?>
        </div>
    </div>     

        <footer>
          <div class="footer">
            <div class="mx-5 mt-5 grid">
              <div class="foot__imagen">
                <img src="assets/img/huella.png" height="80px" alt="">
                <h3 class="mt-4 ml-3 blanco">PetsFasion</h3>
              </div>
              <div class="redes">
                <div class="redes__titulo center">
                  <h5 class="blanco">Síguenos en:</h5>
                </div>
                <div class="redes__imagenes">
                  <img src="assets/img/facebook.png" class="mr-4" height="40px" alt="">
                  <img src="assets/img/linkedin.png" class="mr-4" height="40px" alt="">
                  <img src="assets/img/whatsapp.png"  class="mr-4" height="40px" alt="">
                  <img src="assets/img/instagram.png"  class="mr-4" height="40px" alt="">
                </div>
               
                </div>
            <div class="terminos mt-4 ">
            <a href="archivos/condiciones_compra.pdf" > <p class="footer-enlaces mb-4">Condiciones de compra y verificación </p> </a>
            <a href="archivos/politicas_de_privacidad.pdf" class="footer-enlaces mb-5"> <p class="footer-enlaces"> Aviso legal y
                políticas de privacidad</p></a>
            </div>
            </div>
            
          </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
            $(function () {
                $('[data-toggle="popover"]').popover()
            });
    </script>
               
  </body>
</html>