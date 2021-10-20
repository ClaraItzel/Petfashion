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
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="/petfashion(2)/assets/css/style.css">
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
            <h2 class="center mt-2 mb-2" id="QuienesSomos">¿Quienes somos?</h2> <br>
            <div class="nosotros">
            <div class="nosotros__imagen">
            <img src="assets/img/cat-g71bc39663_1280.png" alt="">
            </div>
            <div class="text">
        
                <p>El mejor aliado de tu mejor amigo  <br>
                Somos una empresa comercializadora de los mejores productos para hacer notar a tus mascotas. <br>
                Te ofrecemos la más surtida variedad de ropa, correas, accesorios y todo lo que buscas para el cuidado y bienestar de las estrellas de la casa.</p> <br>
            
            </div>
            
        </section>
    </div>
  <img src="/petfashion(2)/assets/img/wave6.svg" alt="">
  <div class="bg-verde">
    <div class="container" id="" >
        <section>
            <h2 class="center mb-2" id="">Nuestra fundadora</h2> <br>
            <div class="nosotros">
            <div class="text">
              <div id="tienda"></div>
                <h4>Clara Gómez</h4>
                <p>Una persona comprometida con el trato digno de los animales y la tranquilidad de los dueños. <br>
                    Activista en pro de los derechos de los animales y su protección, el principal objetivo de la fundadora es 
                    distribuir productos de calidad para las mascotas, teniendo como prioridad el bienestar y comodidad de los animales,
                    pues se dió cuenta de que muchas empresas comercializan productos de baja calidad sin importar las consecuencias que
                     les traen a la salud de nuestras mascotas, es por ello que en 2015 se comprometió en la creación de esta empresa donde 
                     además de consentir y hacer lucir a nuestras mascotas, podemos tener la seguridad de que estos productos no comprometen 
                     el bienestar de nuestros pequeños peludos, si ellos se sienten bien, los dueños nos sentiremos seguros y en paz con 
                     nuestras especies. </p>
            </div>
            <div class="nosotros__imagen">
            <img src="/petfashion(2)/assets/img/clara.jfif" alt="">
            </div>
            
        </section>
    </div>
  </div>
  <img src="/petfashion(2)/assets/img/wave5.svg" alt="">
    
    <div class="container">
      <h2 class="center mt-2 mb-2" id="">Nuestros colaboradores</h2> <br>
      <div class="row">
      <div class="grid-cards">
        <?php
          include "assets/php/conexion.php";
          $myconsulta = $conexion->query("select * from colaboradores");
          $filas = $myconsulta->num_rows;
          if ($filas >= 1) {
          while ($lafila = $myconsulta->fetch_assoc()) {
        ?>
            
                  <div class="card">
                      <img height="300"
                      title="<?php echo $lafila["nombre"]; ?>" 
                      alt="<?php echo $lafila['nombre']; ?>"
                      class="card-img-top contain" 
                      src="<?php echo $lafila['foto']; ?>"
                      >
                      <div class="card-body">
                          <h4><?php echo $lafila['nombre']. " " . $lafila['prim_ape']; ?></h4>
                          <h5 class="card-title"><?php echo $lafila['cargo']; ?></h5>
                          <p><?php echo $lafila['presentacion']; ?></p>
                      
                      </div>
                  </div>
            
            <?php
              } //fin del while
          }
          ?>
          </div>
      </div>
    </div>
      
<?php
include("footer.php")
?>
 <!--Popup-->
        
 <?php
include("actualizarperfil.php")
?>
 <script src="/assets/js/emergente.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>