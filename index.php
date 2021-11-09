<?php
    $conexion = mysqli_connect("localhost", "root", "", "petfashion");
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
    <link type="text/css" rel="stylesheet" href="/assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="/petfashion(2)/assets/css/style.css">
    <link rel="preload" href="/petfashion(2)/assets/img/s-1.jpg" as="image">
    <title>PetsFasion</title>
  </head>
  <body>

  <?php
  include("header.php")
  ?>  
    <div class="espacio" id="QuienesSomos">

    </div>
  
    <div class="container" id="QuienesSomos" >
      <section class="mb-4">
        <h2 class="center mt-2 mb-2" id="QuienesSomos">¿Quienes somos?</h2>
        <div class="nosotros">
          <div class="nosotros__imagen">
            <img src="/assets/img/cat-g71bc39663_1280.png" alt="">
          </div>
          <div class="text">
      
            <p>El mejor aliado de tu mejor amigo
              Somos una empresa comercializadora de los mejores productos para hacer notar atus mascotas.
              Te ofrecemos la más surtida variedad de ropa, correas, accesorios y todo lo que buscas para el cuidado y bienestar de las estrellas de la casa.</p>
        <p> <strong>Descubre algunos beneficios de comprar con nosotros </strong>  <a href="acercade.php">click aquí</a></p>
          </div>
        
      </section>
        </div>
        <img src="/assets/img/wave.svg" id="tienda" alt="">
        <section >
        <div class="articulos" id="tienda">
          <h2 class="center titulo mb-4">Compra por categorias</h2>
          <div class="art_tarjetas container">
            <div class="art1__perro art_tar-p">
              <div class="imagen__perro">
                <div class="capa">
                  <h3 class="blanco">Perros</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a class="enlances-tarjeta" href="#">VER MÁS</a>
                </div>
              </div>
            </div>
            <div class="art1__perro"> 
              <div class="imagen__gato">
                <div class="capa">
                  <h3 class="blanco">Gatos</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a class="enlances-tarjeta" href="">VER MÁS</a>
                </div>
              </div>
            </div>
            <div class="art1__perro">
              <div class="imagen__otros">
                <div class="capa">
                  <h3 class="blanco">Otros</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a class="enlances-tarjeta" href="#">VER MÁS</a>
                </div>
            </div>
          </div>
          </div>
        </div>
        <img src="/assets/img/wave2.svg" alt="">
      </section>
        <section class="container nosotros cuenta mb-4">
          <div >
            <h2>Forma parte de esta gran comunidad</h2>
          <p>Porque hacer una cuenta
            <br>
            Registrate en nuestra plataforma
            <br>
            Cuando te registras en nuestro sitio, tu navegación y compras serán más faciles
            <br>
            Facturación rápida y sin errores
            <br>
            Envíos personalizados
            <br>
            Sugerencias especiales</p>
          <!-- <a href="#" class="btn mt-4">Crear cuenta</a> -->
          <?php
                 
                    if(isset($_SESSION["usuario"])){
                        echo'<p><strong>Gracias por ser parte de esta comunidad</strong></p>';
                    }
                    else{
                    echo '<a href="login.php" class="btn mt-4">Crear cuenta</a>';
                    }
                    ?>
          </div>
          <div class="nosotros__imagen">
            <img src="/assets/img/conejos.jpg" alt="">
          </div>
        </section>
        
    </div>
    <?php
        include("footer.php")
        ?>
        <?php
        include("actualizarperfil.php")
        ?>
        <script src="/assets/js/emergente.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>