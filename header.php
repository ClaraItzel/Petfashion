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
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slide1"></div>
            <div class="carousel-caption d-md-block color flex">
                <h1>Sea Bienvendio a PetFashion</h1>
                <p>Dirigido a aquellas personas que les gusta consentir a sus animales</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="slide2"></div>
            <div class="carousel-caption d-md-block color flex">
                <h1>Sea Bienvendio a PetFashion</h1>
                <p>Dirigido a aquellas personas que les gusta consentir a sus animales</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="slide3"></div>
            <div class="carousel-caption  d-md-block color flex">
                <h1>Sea Bienvendio a PetFashion</h1>
                <p>¡Para dueños y mascotas felices! Tu mascota al último ladrido de la moda</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icono_carrusel" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon icono_carrusel" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </header>