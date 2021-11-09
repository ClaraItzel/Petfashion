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
    
    <link type="text/css" rel="stylesheet" href="assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
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
          <img src="assets/img/gato-con-personas-min.jpg" alt="">
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
            <img src="assets/img/15574878807141.jpg" alt="">
            </div>
        </div>
  <img src="assets/img/wave6.svg" alt="">
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
            <img src="assets/img/clara.jfif" alt="">
            </div>
            


        </section>
    </div>
  </div>
  <img src="assets/img/wave5.svg" alt="">
    
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
                            <img class="cover" src="https://thumbs.vienna.at/?url=https://www.vienna.at/2012/07/jasonsegal_epa.jpg&w=428&h=321&crop=1" class="img-circle img-responsive" />
                            <p>Los productos son increíbles, cuentan con una calidad muy buena y la atención al cliente es muy buena. Compre una suéter para gato llevo 3 meses con él y no se ha desbaratado a pesar de que Mirruris es muy jugueton, estoy muy complacido ya que encontrar artículos duraderos para mascotas no es tan tan fácil. </p>
                            <p><strong>Estado de México- Ecatepec. 27/10/2018</strong></p>
                            <h5>Marshall Ericksen</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img class="cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDPCQhhJCiQToaZQIXKv_VcCH3vWhVyTweo27VoeZwi-iMOIbtNG-TlsBc89wsaEQc4rk&usqp=CAU" class="img-circle img-responsive" />
                            <p>He encontrado todos los productos que necesitaba gracias a ustedes, mi gato hoy está a la moda. compre un chaleco para el frío, ya que mi gato suele meterse en las cobijas y no salir, ahora con este producto en las noches frías está en cualquier lugar sin pasar frío, esta tienda garantiza calidad. </p>
                            <p><strong>Estado de México- Atizapán de Zaragoza. 17/07/2019</strong></p>
                            <h5>Mónica Arriaga</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img class="cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToROC0ALbTSJ5PJ_6J4QnbZNBGZTIvFoQX0hVBNO-6yyUQHGC08KzK9ou5b2jRTLNaY1g&usqp=CAU" class="img-circle img-responsive" /><p>El producto me llegó en excelentes condiciones, era justo lo que buscaba y el servicio de paquetería fue muy eficaz. Mi perro CornFleis necesitaba una correa duradera porque es un animal muy grande, había estado buscando en muchas tiendas, hasta que por fin encontré una que pueda aguantar el peso de mi mascota, muchas gracias. </p>
                            <p><strong>Estado de México-Tecamac 01/01/2021</strong></p>
                            <h5>Eder Terrazas</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img class="cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjYxKLMn7rlpc9g4orTrT0975eERFlIUkdzx03XyCUsQrvDbqsG2R-Nb8ZF-o0wv0wCDk&usqp=CAU" class="img-circle img-responsive" /><p>La plataforma es muy intuitiva, fácil de manejar y el servicio es muy bueno. Compré una casita para mi perro, pero quería una que quedara bien con la decoración del patio, busqué en muchos sitios y las opciones eran bastante elevadas hasta que encontré esto, mi chihuahua Malvavisco es muy feliz en su nueva casa. </p>
                            <p><strong>Guadalajara- Tepatitlán de Morelos 15/05/2021 </strong></p>
                            <h5>Edgar Torreblanca</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="data:image/jpeg;base64,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" class="img-circle img-responsive cover" />
                            <p>Estuve buscando por mucho tiempo accesorios para mis aves, pero la mayoría de las tiendas para mascotas solo se enfocan en perros, por lo que estoy muy feliz de encontrar una tienda que tenga tanta diversidad de productos, definitivamente volveré. </p>
                            <p><strong>CDMX- Tultitlán 11/10/2017 </strong></p>
                            <h5>Sofía Castrejon</h5>
                        </div>
                    </div>
                </div>
                   
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

    <!--Testimonial desde BD-->
    <section class="testimonial text-center mt-4">
       <div class="back-slider"> 
         <div class="container pb-5">
         <div class="heading white-heading">
                <h2>Testimonial</h2>
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                
                <?php
                  include "assets/php/conexion.php";
                  $myconsulta = $conexion->query("Select u.nombre, u.prim_ape, u.seg_ape, u.direccion, e.descripcion, e.fecha FROM usuarios AS u, experiencias AS e
                  WHERE e.id_usuario =u.id_usuario");
                  $filas = $myconsulta->num_rows;
                 // if ($filas >= 1) {
                  while ($lafila = $myconsulta->fetch_assoc()) {
                ?>
                  
            <?php
              } //fin del while
         // }
          ?>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img class="cover" src="https://thumbs.vienna.at/?url=https://www.vienna.at/2012/07/jasonsegal_epa.jpg&w=428&h=321&crop=1" class="img-circle img-responsive" />
                            <p><?php echo $lafila["descripcion"]; ?></p>
                            <p><strong>DIRECCION Y FECHA</strong></p>
                            <h5><?php echo $lafila["nombre"]; ?></h5>
                        </div>
                    </div>
                </div>
                   
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
 <script src="assets/js/emergente.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>