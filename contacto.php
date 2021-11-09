<?php
$conexion = mysqli_connect("localhost", "root", "", "petfashion");
session_start();
$correo= $_SESSION['usuario'];
$sql= "SELECT * FROM usuarios where correo='$correo'";
$result=$conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favico-->
    <link rel="shortcut icon" type="image/x-icon" href="pet.ico">
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
          <section class="container Qs_card ">
              <div class="Qs mt-5 ">
                  <p class="center QS__titulo"> ¿Quién es <br> <span class="Qs__span">PetFasion?</span> </p>
              </div>
              <div class="Qs__txt">
                <p>El mejor aliado de tu mejor amigo
                  Somos una empresa comercializadora de los mejores productos para hacer notar atus mascotas.
                  Te ofrecemos la más surtida variedad de ropa, correas, accesorios y todo lo que buscas para el cuidado y bienestar de las estrellas de la casa.</p>
              </div>
          </section>
          <section class="Petempresa mt-3">
            <div class="mision">
              <h3 class="center">Misión</h3>
              <p>Crear un espacio único para la compra de artículos exclusivos para mascotas, con una gran variedad sin excluir a aquellas mascotas poco comunes.</p>
              <p>La misión de la empresa es garantizar a sus clientes productos que reflejen su misma pasión por la moda, en sus mascotas que son parte de ellos.</p>
              <div class="m-overlay">
                
              </div>
            </div>
            <div class="vision">
              <h3 class="center">Visión</h3>
              <p>Ser una empresa competitiva en la comercialización y distribución de prendas de vestir y accesorios para animales, que pueda llegar a clientes de todo el mundo facilitándoles diferentes diseños y modas de acuerdo a sus gustos y tendencias a precios asequibles</p>
              
            </div>
          </section>
          <div id="tienda"></div>
          <section class="container">
            <h2 class="center mt-5">Valores</h2>
            <ul class="conimagen center">
              <li><span> <strong>Transparencia: </strong> </span>  Siempre seremos claros  en la descripción de nuestros productos, toda la información que nuestros clientes necesiten, será otorgada de forma íntegra y verídica, todos los colaboradores estamos comprometidos con la empresa y nuestros clientes para el desarrollo honesto de nuestras actividades</li>
              <li><strong>Respeto:</strong>El respeto es el principio primordial del desarrollo de la humanidad, por lo que dentro de la empresa todos nos trataremos con cordialidad y respeto. <br>
                Somos conscientes de que nuestros usuarios son seres vivos que merecen todo nuestro afecto, por lo tanto merecen ser tratados con dignidad, al raspetar a tu mascota aseguramos tu tranquilidad y confianza
                </li>
              <li><strong>Honestidad:</strong>Anteponer la sinceridad ante cualquier situación, es importante generar credibilidad a los objetivos de la empresa, facilitando una relación estrecha y saludable con nuestros clientes. La transparencia en nuestro trato es el principio del respeto dentro y fuera de la empresa.
                </li>
              <li><strong>Integridad:</strong>Nuestros colaboradores deben ser personas que cuenten con toda la confianza para poner en sus manos a nuestros clientes y usuarios
                <br>
                Dar lo mejor de cada uno en cada actividad realizada, haciéndonos responsables de los resultados arrojados
                
                </li>   
              <li><strong>Compromiso:</strong>Permite la transición entre las promesas y los hechos, generando los beneficios y resultados tangibles, ningún compromiso planteado para nuestros clientes será insignificante, se trabajará activamente en cumplir todas las promesas.
                </li>   
              <li><strong>Pasión:</strong>Usar nuestro impulso y optimismo para motivar, comprometer e inspirar a otras personas que amen nuestra causa. Ninguna actividad ni trato será simplificado, cada actividad será sumada al alcance de nuestros objetivos y la satisfacción de nuestros colaboradores y clientes.

                </li>   
            </ul>
          </section>
          <img src="/assets/img/wave3.svg" alt="">
          <div class="bg-verde">
            <div class="container bg-verde">
              <h1 class="margin-cero center mb-4">Objetivos</h1>
              <div class="grid-2">
                <div class="tabla">
                  <div class="celda">Darnos a conocer por medio de redes sociales</div>
                  <div class="celda bg-morado">Hacer estudios de mercados de manera constante para mantenernos competitivos en el mercado</div>
                  <div class="celda">Generar un sentimiento de fidelidad en la clientela proporcionando el mejor de los servicios posibles, monitoreando los envíos a los clientes, mejorando la calidad de nuestras prendas, etc.</div>
                  <div class="celda bg-morado">Estar actualizando los productos de manera constante para mantener interesada a la clientela actual y atraer nuevo público</div>
                  <div class="celda">Tener una interfaz intuitiva para mejorar la experiencia de usuario y hacer la navegación fácil.</div>
                </div>
                <div class="tabla">
                  <div class="celda bg-morado">Implementar códigos con descuentos atractivos para atraer más público a la plataforma.</div>
                  <div class="celda">Expandir el alcance de la plataforma a otros estados para abarcar el mayor público posible</div>
                  <div class="celda bg-morado">Tener gran variedad de productos para poder satisfacer la necesidades de mayor número posible de clientes</div>
                  <div class="celda">Respetar la confidencialidad de los datos de nuestros clientes</div>
                  <div class="celda bg-morado">Captar la atención de nuevos clientes a través de la amplia variedad de productos </div>
                </div>
                
              </div>
              
            </div>
          </div>
          <img src="/assets/img/wave4.svg" alt="">
          <?php
include("footer.php");
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