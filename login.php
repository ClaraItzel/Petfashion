<?php
  
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    
    }

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
        <link rel="preload" href="assets/img/pexels-tina-nord-7324407.jpg" as="image">
        <title>PetsFasion</title>
      </head>
  <body class="body">
    <main>

        <div class="contenedor__todo">
            
            <div class="caja__trasera">
                <div class="caja__trasera-login blanco">
                    <h3 >¿Ya tienes cuenta?</h3>
                    <p>Inicié sesión en la página</p>
                    <button id="btn_iniciar-sesion" onclick="IniciarSesion();">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register blanco">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Sea parte de esta comunidad</p>
                    <button id="btn__register" onclick="register();">Registrarse</button>
                </div>
            </div>
            
            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="assets/php/login_user.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <div class="campo">
                        <input class="campo__field"
                        type="email" name="correo" id="correo" value="" placeholder="Inserta tu correo">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="password" name="password" id="password2" value="" placeholder="Contraseña">
                    </div>
                    <button>Iniciar</button>
                </form>
                 <!--Registro-->
                
                <form method="post" action="assets/php/registro_usuarios.php" class="form__register">
                <h2>Registro</h2>
                  
                <div class="campo">
                        <input class="campo__field"
                        type="text" name="nombre" id="cantidad" value="" placeholder="Nombre">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="text" name="prim_ape" id="primer_ape" value="" placeholder="Primer Apellido">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="text" name="seg_ape" id="seg_ape" value="" placeholder="Segundo Apellido">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="email" name="correo" id="correo" value="" placeholder="Correo">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="text" name="direccion" id="direccion" value="" placeholder="Direccion">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="text" name="telefono" id="direccion" value="" placeholder="telefono">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="text" name="rfc" id="rfc" value="" placeholder="rfc">
                    </div>
                    <div class="campo">
                        <input class="campo__field"
                        type="password" name="password" id="password" value="" placeholder="password">
                    </div>
                    <div class="campo">
                       
                            <button>Registro</button>
                    </div>
                </form>
            </div>

        </div>

    </main>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


  </body>
</html>
