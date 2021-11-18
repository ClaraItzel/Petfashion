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
                  <a href="#perro">VER MÁS</a>
                </div>
              </div>
            </div>
            <div class="art1__perro"> 
              <div class="imagen__gato">
                <div class="capa">
                  <h3 class="blanco">Gatos</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a href="#gato">VER MÁS</a>
                </div>
              </div>
            </div>
            <div class="art1__perro">
              <div class="imagen__otros">
                <div class="capa">
                  <h3 class="blanco">Otros</h3>
                  <p class="blanco">¡Encuentra los mejores precios y una gran variedad de productos!</p>
                  <a href="#otros">VER MÁS</a>
                </div>
            </div>
          </div>
          </div>
        </div>
        <img src="assets/img/wave2.svg" alt="">
      
    <div class="container">
    <div class="container" >
      <div class="buscador" >
        <h3>¿Qué producto deseas?</h3>
        <form  method="get" id="">
          <input type="text" name="busqueda" class="form-control inputs__contacto"><br>
          <input id="buscador" type="submit" href="#buscador" name="enviar"  value="Buscar"class="btn btn-primary">
        </form>
        <br><br>
        <?php
          include "assets/php/conexion.php";
            if(isset($_GET['enviar'])){
              $busqueda = $_GET['busqueda'];
              $myconsulta = $conexion->query("select * from productos where nombre like '%$busqueda%'");
                while($lafila =  $myconsulta->fetch_assoc()){
                  echo"<script>
                  
                      location.href='catalogo.php?busqueda=$busqueda&enviar=Buscar#buscador';
                      var data2 = document.querySelector('#titulo');
                      
                      </script>
                  ";
                  ?>
                  
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6  clase">
                          <div class="card">

                              <?php echo $lafila["imagen"]; ?>

                              <div class="card-body">
                                  <h5 class="center"><span><?php echo $lafila['nombre']; ?></span></h5>
                                  
                                  <p class="card-title center">$<?php echo $lafila['precio_venta']; ?></p>
                                  <!--<p class="card-text">Descripcion</p>-->

                                  <form action="productos.php" class="alinear-centro" Method="POST">
                      <img src="/petfashion(2)/assets/img/carro.png" class="mt-4 pointer" alt="" height="40px">
                      <input type="hidden" name="Id_Prod" value="<?php echo $lafila['id_producto']; ?>">
                    <button class="boton mq-60" 
                        name="btnAccion" 
                        value="agregar" 
                        type="submit">Ver</button>
                    </form>
                              </form>
                              </div>
                          </div>
                    </div>
                    <?php
                } //fin del while
            }//fin del if
        ?>

      </div>

      <br>
      <h3 class="center" id="titulo"></h3>
      <div class="row">
       
      <?php
        include "assets/php/conexion.php";
        $myconsulta = $conexion->query("select * from productos");
        $filas = $myconsulta->num_rows;
        if ($filas >= 1) {
        while ($lafila = $myconsulta->fetch_assoc()) {
      ?>
          <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 ">
                <div class="card mb-3">
                    <?php echo $lafila['imagen']; ?>
                    
                    <div class="card-body">
                        <h5 class="center"><?php echo $lafila['nombre']; ?></h5>
                        <p class="card-title center">$<?php echo $lafila['precio_venta']; ?></p>
                        <!--<p class="card-text">Descripcion</p>-->
                  <div >
                    <form action="productos.php" class="alinear-centro" Method="POST">
                      <img src="/petfashion(2)/assets/img/carro.png" class="mt-4 pointer" alt="" height="40px">
                      <input type="hidden" name="Id_Prod" value="<?php echo $lafila['id_producto']; ?>">
                    <button class="boton mq-60" 
                        name="btnAccion" 
                        value="agregar" 
                        type="submit">Ver</button>
                    </form>
                    
                  </div>
                    
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
    <script src="/petfashion(2)/assets/js/tienda.js"></script>
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