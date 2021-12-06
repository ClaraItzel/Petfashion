<?php
    $conexion = mysqli_connect("localhost", "root", "", "petfashion");
session_start();
$correo= $_SESSION['usuario'];
$sql= "SELECT * FROM usuarios where correo='$correo'";
$result=$conexion->query($sql);
if ($result===false) {
  trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
}else{
  $num_rows=$result->num_rows;
  $result->data_seek(0);

  $row=$result->fetch_assoc();
  $user= $row['id_usuario'];

?>

<!DOCTYPE html>
<html lang="en">
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <img class="mr-3" src="/assets/img/huella.png" height="40px" alt="">
        <a class="navbar-brand letra" href="index.php"> <h3> Petfashion </h3> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link enlances-nav" href="contacto.php">Sobre nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link enlances-nav" href="catalogo.php">Tienda</a>
            </li>
            <li class="nav-item enlances-nav">
              <a class="nav-link" href="contacto2.php">Contacto</a>
            </li>
            <li class="nav-item enlances-nav">
              <a class="nav-link" href="acercade.php">Identidad</a>
            </li>
      
           
          </ul>
          <form class="form-inline my-2 my-md-0">
      
          <?php
      
                          if(isset($_SESSION["usuario"])){
                              echo'
                              <li class="nav-item dropdown mr-5 lista">
              <a class="nav-link dropdown-toggle enlances-nav" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="mr-3" src="/assets/img/gato-manchado.png" alt="" height="30px">'
              .$_SESSION["usuario"].
              '</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item enlances-nav" id="popup" href="#tienda">Modificar Perfil</a>
                <a class="dropdown-item enlances-nav" href="mostrarCarro.php">Carrito</a>
                <a class="dropdown-item enlances-nav" href="factura.php">Mis facturas</a>
                <a class="dropdown-item enlances-nav" href="cerrarSesion.php">Cerrar Sesión</a>
              </div>
            </li>
                              ';
                          }
                          else{
                          echo '
                          <a class="nav-link enlances-nav" href="login.php">Inicia Sesión</a>
                        ';
                          }
                          ?>
          <!--   <li class="nav-item dropdown mr-5">
              <a class="nav-link dropdown-toggle enlances-nav" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="/assets/img/gato-manchado.png" alt="" height="30px">
                John Doe
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item enlances-nav" href="#">Modificar Perfil</a>
                <a class="dropdown-item enlances-nav" href="#">Carrito</a>
                <a class="dropdown-item enlances-nav" href="cerrarSesion.php">Cerrar Sesión</a>
              </div>
            </li> -->
          </form>
        </div>
      </nav>
    </header>

    <div class="mt-5">
      <h1 class="pt-5 center">
        Carrito de compras
        </h1>
        <div class="vacio container">
          
        </div>
        <?php
       $sql2= "SELECT * FROM carrito where id_usuario='$user'";
       $result2=$conexion->query($sql2);
       if ($result2===false) {
         trigger_error('Error, favor de avisar al administrador SQL:'.$sql2.'Error:'.$conexion->error, E_USER_ERROR);
       }else{
         $num_rows=$result2->num_rows;
         $result2->data_seek(0);
         while($lafila =  $result2->fetch_assoc()){
          $sql3="SELECT * FROM productos WHERE id_producto ='".$lafila['id_producto']."'";
          $result=$conexion->query($sql3);
          $prod=$result->fetch_assoc();
          echo'
          
          <div class="bordesCarro container" id="'.$lafila['id_carro'].'">

         
          <div class="gridCarro" class="elemento">
          
            <div class="imagenCarro" >
            <form class="prueba" method="POST">
            <input type="hidden" name="carrito" value="'.$lafila['id_carro'].'">
              <button class="borrar">X</button>
              </form>
              '.$prod['imagen'].'
            </div>
            
       
        <div class="concepto">
        
           <h6>'.$prod['nombre'].'</h6>
        <p class="l-1">'.$prod['descripcion'].'</p>
        <div>
          <div class="flexCarro">
            <div>
              <h6>Cantidad</h6>
              <form class="frm_actualizar" method="POST">
              <input type="hidden" class="Pxprod'.$lafila['id_carro'].'" name="precio_carrito" value="'.$prod['precio_venta'].'">
              <input type="hidden" name="id_carro" class="id_carro" value="'.$lafila['id_carro'].'">
              <button class="btn_guardar"><img src="/petfashion(2)/assets/img/guardar-el-archivo.png" alt=""></button>
               <input class="cantidad" type="number" name="cantidad" min="1" value="'.$lafila['Cantidad'].'">
              </form>
              
            </div>
            <div>
              <h5>Precio</h5>
              <p class="l-1" id="precio'.$lafila['id_carro'].'"><strong>$'.$lafila['PrecioTotal'].' </strong></p>
              <input class="precio pr'.$lafila['id_carro'].'" id="Oculto'.$lafila['id_carro'].'"  type="hidden" name="" value="'.$lafila['PrecioTotal'].'">
              
            </div>
            
          </div>
          </div>   
      </div>
      </div>
      </div>
      
      <!--Aqui Acaba el articulo-->
      <div class="mensaje mensaje'.$lafila['id_carro'].'"><p></p></div>';
         }
        }
      }
        ?>
       

    </div>
    <img src="/petfashion(2)/assets/img/wave6.svg" alt="">
    <div class="bg-verde">
          <div class="container">
     <h4 class="center">Resumen</h4> 
    </div>
    
    <hr class="linea">

  
    <div class="container flex-elementos">
      <div class="flex-pagar">
        <h5>Subtotal</h5>
        <p class="pagar ml-2"></p>
        <input type="hidden" class="pagarOculto" name="">
      </div>
      <div class="flex-pagar">
        <h5>Iva</h5>
        <p class="iva ml-2"></p>
        <input type="hidden" class="ivaoculto" name="">
      </div>
     
      <div class="flex-pagar">
        <h5>Total</h5>
      <p class="totalPagar ml-2"></p> 
       <input type="hidden" class='precioOculto' name=""> 
      </div>
      </div>
      <hr class="linea">
      <div class="container flex-btn">
        <button class="boton w-100-2" id="comprar">Comprar ahora</button>
      </div>
      </div>
    </div>

      <img src="/petfashion(2)/assets/img/wave5.svg" alt="">       

</body>

<script src="/petfashion(2)/assets/js/calculando-carro.js"></script>
<script src="/petfashion(2)/assets/js/actualizando-carro.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>