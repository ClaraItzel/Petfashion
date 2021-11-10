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
            <h5 class="center">Creada en Enero de 2015</h5>
            <div class="nosotros">
            <div class="nosotros__imagen">
            <img src="assets/img/cat-g71bc39663_1280.png" alt="">
            </div>
            <div class="text">
        
                <p>La empresa PetsFashion nace en 2015 como un objetivo personal de Clara Gómez y Lilia Inclán, activistas en pro de los derechos de los animales y su protección, el principal objetivo de las fundadoras es distribuir productos de calidad para las mascotas, teniendo como prioridad el bienestar y comodidad de los animales, pues se dieron cuenta de que muchas empresas comercializan productos de baja calidad sin importar las consecuencias que les traen a la salud de nuestras mascotas, es por ello que en 2015 se comprometieron en la creación de esta empresa donde además de consentir y hacer lucir a nuestras mascotas, podemos tener la seguridad de que estos productos no comprometen el bienestar de nuestros pequeños peludos, si ellos se sienten bien, los dueños nos sentiremos seguros y en paz con nuestras especies.</p> <br>
            
            </div>
            
        </section>
        
    </div>
    <div class="parallax">
    <section class="bg-prin p-5">
      
        <div class="container">
            <div class="ubi">
              <div class="ubi__texto blanco">
          <h3>Ubicación</h3>
            <p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#24041d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <line x1="18" y1="6" x2="18" y2="6.01" />
  <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
  <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
  <line x1="9" y1="4" x2="9" y2="17" />
  <line x1="15" y1="15" x2="15" y2="20" />
</svg>Av De Los Reyes Mz 7 Lt 3, Santa Rosa de Lima, 54740 Cuautitlán Izcalli, Méx.</p>
          <h5>¿Por qué la ubicación?</h5>
          <p>
             La ubicación se eligió con base en que ahí está una de las escuelas más grandes de Veterinaria, lo cual procura potenciales clientes que quieran elegir nuestros artículos por la cercanía y gran variedad de productos. Destacando de que ahí mismo el municipio tiene más del 50% de su población construida por jóvenes, que son nuestro principal público.
          </p>

          </div>
            </div>
        
        </div>
      </div>
          
            
        </section>
        <h2 class="center">Fundadores</h2>
        <div class="Creadoras container">
          <div class="imagen-C p-5">
          <img src="/assets/img/gato-con-personas-min.jpg" alt="">
            </div>
          <div class="Clara">
            
            
            <div class="Clara-txt">
              <h5>Clara Gómez</h5>
              <p>Nació en el Estado de México, Atizapán de Zaragoza, sus principales hobbies radican en cocinar, disfrutar de películas y cuidar a su mascota Kira, ella es una persona que le gusta estar en distintas actividades como acampar y estar en contacto con la naturaleza, de ahí su gusto por las mascotas, trabaja como programadora Front-end, dedica mucho de su tiempo a aprender cosas nuevas.</p>
            </div>
            
          </div>
          <div class="Lilia">
          <div class="Clara-txt">
              <h5>Lilia Inclán</h5>
              <p>Reside en Teoloyucan Estado de México, disfruta de cuidar de su jardín y darle mantenimiento a sus plantaciones en compañía de su pequeño perro Mark, es una persona empática con las situaciones de los animales, pues así conoció a Mark, además de eso dedica tiempo a actividades deportivas acuáticas. </p>
            </div>
            
          </div>
          <div class="imagen-L p-5">
            <img src="/assets/img/15574878807141.jpg" alt="">
            </div>
        </div>
  <img src="/petfashion(2)/assets/img/wave6.svg" alt="">
  <div class="bg-verde">
    <div class="container" id="" >
        <section>
            <h2 class="center mb-2" id="">Historia</h2> <br>
            <div class="nosotros">
            <div class="text">
              <div id="tienda"></div>
             
                <h4>Petfashion</h4>
                <p>Surgió a raíz de diferentes acontecimientos con las mascotas de las fundadoras lo que las llevaron a crear un entorno dedicado completamente a los animales, ellas estando en contacto con personas, que de igual manera guardaban un genuino cariño por sus mascotas, vieron un público al cual dirigirse y de esa manera nació Petfashion, un lugar dirigido a todo tipo de mascotas, pues como ellas estudiaban cerca de la facultad de veterinaria y vieron la gran cantidad de artículos que existían para los distintos tipos de mascotas, lo cual lo tomaron como ventana de oportunidad para iniciar un negocio, en un contexto que ambas disfrutaban que era el cuidado de las mascotas. </p>
                <p>
                La idea de asociarnos surge de que ambas teníamos ideas de negocio similares, todos los acontecimientos que vivimos en el pasado nos llevaron a querer cimentar un negocio en que beneficiaria a ambas partes, haciendo algo que les gustaba de esa manera mezclando, lo aprendido en sus respectivas carreras y su hobby, que era el cuidar a sus mascotas, también ayudando a los compañeros de la carrera de veterinaria a encontrar artículos de manera fácil y eficiente. 
                </p>
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
    <!--Testimonial desde BD-->
    <section class="testimonial text-center mt-4">
       <div class="back-slider"> 
         <div class="container pb-5">
         <div class="heading white-heading">
                <h2>Testimonial</h2>
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
            <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img class="cover" src="/petfashion(2)/assets/img/logo.jpg" class="img-circle img-responsive" />
                            <p>Aquí encontrarás a algunos de nuestros clientes que han vivido la experiencia de comprar en petfashion</p>
                            <h2 class="blanco">Petfashion</h2>
                        </div>
                    </div>

                <?php
                  include "assets/php/conexion.php";
                  $myconsulta = $conexion->query("Select u.nombre, u.foto, u.prim_ape, u.seg_ape, u.direccion, e.descripcion, e.fecha FROM usuarios AS u, experiencias AS e
                  WHERE e.id_usuario =u.id_usuario");
                  $filas = $myconsulta->num_rows;
                 // if ($filas >= 1) {
                  while ($lafila = $myconsulta->fetch_assoc()) {
                    
                ?>
                <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img class="cover" src="<?php echo $lafila['foto']; ?>" class="img-circle img-responsive" />
                            <p><?php echo $lafila["descripcion"]; ?></p>
                            <p><strong><?php echo $lafila["fecha"]; ?></strong></p>
                            <h5><?php echo $lafila["nombre"];
                            echo " ";
                            echo $lafila["prim_ape"]?></h5>
                        </div>
                    </div>
            <?php
              } //fin del while
         // }
          ?>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        </div>

    </section>

    <!--Testimonial desde BD FIN-->
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