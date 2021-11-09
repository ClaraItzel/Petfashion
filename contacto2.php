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
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <title>PetsFasion</title>
  </head>
  <body>
  <?php
  include("header.php")
  ?>  
  <br><br><br>

  <div class="container">
    <h3 class="center">Contacto</h3>
      <div class="row">
          <div class="col-4">
                <div class="card">
                    <img src="assets/img/ubicacion.jpg" alt="ubicacion" width="300" height="300">
                    <div class="card-body">
                        <h5><span>Avenida Reforma 143, Colonia Bosques Ciudad de México</span></h5>
                        <h6 class="card-title"></h6>
                        <!--<p class="card-text">Descripcion</p>-->
                    </div>
                </div>
          </div>
          <div class="col-4">
                <div class="card">
                    <img src="/assets/img/telefono.jpg" alt="telefono" width="300" height="300"> 
                    <div class="card-body">
                        <h5><span>5522002121</span></h5>
                        <h6 class="card-title"></h6>
                        <!--<p class="card-text">Descripcion</p>-->
                    </div>
                </div>
          </div>
          <div class="col-4">
                <div class="card">
                    <img src="assets/img/correo.jfif" alt="correo" width="300" height="300">
                    <div class="card-body">
                        <h5><span>petsfashion@ayuda.com</span></h5>
                        <h6 class="card-title"></h6>
                        <!--<p class="card-text">Descripcion</p>-->
                    </div>
                </div>
          </div>
        </div>
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