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

    <title>PetsFasion</title>
  </head>
  <body>
  <?php
  include("header.php")
  ?>     
    
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
    <?php
  include("actualizarperfil.php")
  ?>  
    <?php
  include("footer.php")
  ?>  
    <script src="/assets/js/emergente.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
            $(function () {
                $('[data-toggle="popover"]').popover()
            });
    </script>
               
  </body>
</html>