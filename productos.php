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
    
    <link type="text/css" rel="stylesheet" href="/petfashion(2)//assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="/petfashion(2)/assets/css/style.css">

    <title>PetsFasion</title>
  </head>
  <body>
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
          <a class="dropdown-item enlances-nav" href="#">Carrito</a>
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
<?php
$conexion = mysqli_connect("localhost", "root", "", "petfashion");
$Id_prod=$_POST["Id_Prod"];
$sql="SELECT * FROM productos WHERE id_producto ='".$Id_prod."'";
  $result=$conexion->query($sql);
  if ($result===false) {
    trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
  }else{
    $num_rows=$result->num_rows;
    $result->data_seek(0);

    $row=$result->fetch_assoc();
    if($row["disponibilidad"]==0){
      $disponible='AGOTADO';
    }else if($row["disponibilidad"]==1){
      $disponible='DISPONIBLE';
    }
    echo'
    <div class="container mt-5">
    <h2 class="mt-5 center pt-8">'.$row["nombre"].'</h2>
    
        <div class="producto">
            <div class="imagen-p mr-5">
            '.$row["imagen"].'
            </div>
            <div class="texto">
            <p class="mt-3 disponible">'.$disponible.'</p>
            <img src="/petfashion(2)/assets/img/estrella(1).png" height="20px" alt="">
            <img src="/petfashion(2)//assets/img/estrella(1).png" height="20px" alt="">
            <img src="/petfashion(2)//assets/img/estrella(1).png"  height="20px" alt="">
            <img src="/petfashion(2)//assets/img/estrella(1).png" height="20px" alt="">
            <img src="/petfashion(2)//assets/img/estrella(1).png"  height="20px" alt="">
            <div class="">
                    <p ><strong>$'.$row["precio_venta"].'.00</strong></p>
                    <div class="cantidad flex-prod">
                        <h5 class="mr-5">Cantidad</h5>
                        <input type="number" name="cantidad" class="inputs__contacto" id="prod_cantidad" min="1" value="1">
                    </div>
                </div>
                <h5 class="mr-5">Descripción</h5>
                <p>'.$row["descripcion"].'</p>
                <div class="cantidad">
                <h4>Código de descuento</h4>
                <form method="POST" id="frm_envio-prod" class="flex-prod formulario-codigo">
                    <input type="text" name="codigo" class="inputs__contacto" id="">
                    <button class="btn ml-3">Aplicar</button>
                    
                    
                </form>
                <div class="mensaje mt-3"></div>
                <p class="mt-3"><strong>TOTAL</strong> <span class="precio" id="precioV">$'.$row["precio_venta"].'.00 </span> </p>
                <input type="hidden" name="pr" value="'.$row["precio_venta"].'" id="precio">
                <button class="boton w-80">Agregar al carrito</button>
                <div class="mt-5">
               
                Si te arrepentiste de comprar el producto o es diferente de lo que pediste:
                  Debe estar sin marcas de mal uso y tal cual lo recibiste.
                  Debe tener sus accesorios, manuales y etiquetas.
                  Cuando lo devuelvas y lo revisemos, debe estar en las mismas condiciones que describas al reclamar.
                  Tienes 30 días corridos para devolverlo desde que te llegó
                  <br>
                  Haremos el reembolso 15 días hábiles después de que llegue el producto, una vez que revisemos si cumple con las políticas de devolución.
                  Una vez que hagamos el reembolso, verás todos los detalles sobre el monto, lugar y día de acreditación del dinero desde el estado de tu compra. 

                    </div>
                
            </div>
           
        </div>
        </div>
    ';
}?> 

<?php

include("actualizarperfil.php");
?>  
  <?php
include("footer.php")
?>  
 <script src="/petfashion(2)/assets/js/descuento-ajax.js"></script> 
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