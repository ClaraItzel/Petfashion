<?php
    $conexion = mysqli_connect("localhost", "root", "", "npetfashion");
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
    
  <!--   <link type="text/css" rel="stylesheet" href="/assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css"> -->
    <link type="text/css" rel="stylesheet" href="/petfashion(2)/assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="/petfashion(2)/assets/css/style.css">
    <title>PetsFasion</title>
    </head>
  <body>
  <?php
  include("header.php")
  ?>  
  <br><br><br>

  <div class="container">
  <form id='frm_envio' method="POST" >
    <div class="form-group" >
      <h4>Nombre:</h4>
      <div class="row">  
      <div class="col-lg-4"> 
      <div class="campo">
                        <input class="inputs__contacto"
                        type="text" name="Nombre" id="cantidad" value="" placeholder="Nombre">
                    </div>
                  </div>
        <div class="col-lg-4">
        <div class="campo">
        <input class="inputs__contacto"
                 type="text" name="prim_ape" id="primer_ape" placeholder="Primer Apellido">
                    </div>
        </div>
        <div class="col-lg-4">
        <input class="inputs__contacto"
                        type="text" name="seg_ape" id="seg_ape" placeholder="Segundo Apellido">
        </div>
      </div> 
    </div>
    <div class="form-group">
      <h4>Correo y telefono:</h4>  
      <div class="row">
        <div class="col-lg-6">
        <input class="inputs__contacto"
                        type="email" name="correo" id="correo" placeholder="Correo">
        </div>  
        <div class="col-lg-6">
          <input class=" inputs__contacto my-2"  id="telefono" type="text" name="telefono" placeholder="5500000000"/>
        </div>
      </div>
    </div>
    <div class="form-group">
      <h4>Dinos tus comentarios:</h4>  
      <div class="row ">
          <div class="col-lg-12">
            <textarea class=" inputs__contacto" id="mensaje" type="text" name="mensaje" cols="30" rows="10" placeholder="Queremos escucharte"></textarea>
          </div>
      </div>
    </div>

    <button type="submit" class="boton btn-default">Enviar</button>
    </form>

  </div>
<div class="mensaje p-3 mt-2">
</div>
  <div class="container">
    <h3 class="center">Contacto</h3>
      <div class="row">
          <div class="col-lg-12 col-md-12 mb-3">
                <div class="card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.1002296470283!2d-99.21742148577785!3d19.665728838282064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21fb4da09c17d%3A0xda9f8177c1ccbbf1!2sAtencion%20Clinica%20Veterinaria%20rehabilitacion%20Izcalli!5e0!3m2!1ses-419!2smx!4v1636494466909!5m2!1ses-419!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="card-body">
                        <h5><span>Av De Los Reyes Mz 7 Lt 3, Santa Rosa de Lima, 54740 Cuautitlán Izcalli, Méx.</span></h5>
                        <h6 class="card-title"></h6>
                        <!--<p class="card-text">Descripcion</p>-->
                    </div>
                </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-3">
                <div class="card">
                    <img class="cover" src="/assets/img/telefono.jpg" alt="telefono" width="100%" height="300"> 
                    <div class="card-body">
                        <h5><span>5522002121</span></h5>
                        <h6 class="card-title"></h6>
                        <!--<p class="card-text">Descripcion</p>-->
                    </div>
                </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-3">
                <div class="card">
                    <img class="cover" src="assets/img/correo.jfif" alt="correo" width="100%" height="300">
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
     <script src="/petfashion(2)/assets/js/pet-ajax.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>