<?php
$conexion = mysqli_connect("localhost", "root", "", "facturacion");
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
    <link type="text/css" rel="stylesheet" href="../assets/css/normalize.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css">
    <link rel="preload" href="/assets/img/s-1.jpg" as="image">
    <title>PetsFasion</title>
  </head>
  <body>

  <?php
  include("header.php")
  ?>  
    

  <main class="container"> 
            <form action="accion.php" method="POST">
               
            <h3 class="centrar-texto"></h3>
                <div class="directorio-bg">
                    
                </div>
                <form class="formulario" action="accion.php" method="POST">
                    <h1 class="center">Factura</h1>
                    
                    </div>
                    <div class="campo">
                        <label class="campo__label" for="HorayFecha"><p> Numero ticket </p></label>
                            <input class="campo__field"
                            type="number" name="ticket" id="ticket" value="" placeholder="Ej. 2">
                        
                    </div>
                    <!--<div class="campo">
                        <label class="campo__label"
                        for="Generacion">RFC emisor</label>
                            <input class="campo__field"
                            type="text" name="rfcEmi" id="rfc" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion">Empresa</label>
                            <input class="campo__field"
                            type="text" name="empresa" id="empresa" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>-->
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion"><p>RFC cliente</p></label>
                            <input class="campo__field"
                            type="text" name="rfcCli" id="rfcCli" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion"><p>Correo cliente</p></label>
                            <input class="campo__field"
                            type="text" name="correo" id="correo" value="" placeholder="Ej. correo@dominio.com">
                        
                    </div>
                    <!--<div class="campo">
                        <label class="campo__label"
                        for="Generacion">Nombre Completo</label>
                            <input class="campo__field"
                            type="text" name="Nombre" id="Nombre" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion">Fecha emision</label>
                            <input class="campo__field"
                            type="date" name="fecha" id="fecha" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="Generacion">Tipo de comprobante</label>
                            <input class="campo__field"
                            type="text" name="comprobante" id="comprobante" value="" placeholder="Ej. GOAC123450GG8">
                        
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Regimen Fiscal</label>
                        <input class="campo__field"
                        type="text" name="regimen" id="regimen" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Clave producto</label>
                        <input class="campo__field"
                        type="text" name="c_producto" id="c_producto" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Cantidad</label>
                        <input class="campo__field"
                        type="text" name="cantidad" id="cantidad" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">descripcion</label>
                        <input class="campo__field"
                        type="text" name="descripcion" id="descripcion" value="" placeholder="Ej. correo@correo.com">
                    </div>
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Valor Unitario</label>
                        <input class="campo__field"
                        type="text" name="v_unitario" id="v_unitario" value="" placeholder="Ej. correo@correo.com">
                    </div>-->
                    <div class="campo">
                        <label class="campo__label"
                        for="no-cuenta"><p> Forma de pago</p></label>
                        <input class="campo__field"
                        type="text" name="pago" id="pago" value="" placeholder="Ej. Pago en efectivo/ tarjeta de debito">
                    </div>
                    <!--<div class="campo">
                        <label class="campo__label"
                        for="no-cuenta">Sello digital</label>
                        <input class="campo__field"
                        type="text" name="sello" id="sello" value="" placeholder="Ej. correo@correo.com">
                    </div>-->
                    <div class="campo mt-5">
                       
                            <input type="submit" class="boton boton--secun" value="Crear factura">
                    </div>
                    
            
                </form>
            
        </main>
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