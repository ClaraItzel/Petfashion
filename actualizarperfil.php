<!--Popup-->
        
<div class="overlay inactive mt-5" id="overlay">
        <div class="popup container" id="overpop">
            <a href="#" id="btn_cerrar" class="cerrar_popup"><img src="/assets/img/boton-cerrar.png" alt=""></a>
            <h3 class="center">Modulo de cambios</h3>
            <p class="center">Aquí puedes actualizar tu información</p>
            <form action="modulosCambios.php" class="form-overlay" method="POST">
            <div class="contenedor-inputs">
            <?php
         if(isset($_SESSION["usuario"])){
        if ($result===false) {
          trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
        }else{
          $num_rows=$result->num_rows;
            $result->data_seek(0);
            while ($row=$result->fetch_assoc())
            {
             /*  echo"<script>
              alert('".$row["nombre"]."');
                  </script>"; */
            echo'
      
            <input class="campo__field"
                 type="text" name="nombre" id="cantidad" value="'.$row["nombre"].'" placeholder="Nombre">
                 <input class="campo__field"
                 type="text" name="prim_ape" id="primer_ape" value="'.$row["prim_ape"].'" placeholder="Primer Apellido">
                 <input class="campo__field"
                        type="text" name="seg_ape" id="seg_ape" value="'.$row["seg_ape"].'" placeholder="Segundo Apellido">
                        <input class="campo__field"
                        type="email" name="correo" id="correo" value="'.$row["correo"].'" placeholder="Correo">
                        <input class="campo__field"
                        type="text" name="direccion" id="direccion" value="'.$row["direccion"].'" placeholder="Direccion">
                        <input class="campo__field"
                        type="text" name="telefono" id="direccion" value="'.$row["telefono"].'" placeholder="telefono">
                        <input class="campo__field"
                        type="text" name="rfc" id="rfc" value="'.$row["rfc"].'" placeholder="rfc">
                        <input class="campo__field"
                        type="password" name="password" id="password" value="" placeholder="password">
                </div>  
            ';

            }
        }
      }
        ?>

            </div>
            
            <div class="flex container mt-5">
              <input type="submit" class="btn_submit boton w-60" value="Actualizar">
            </div>
              
            
                    
    </div>   
                        
                        
                        
                        
                        
                        
              </form>
            </div>
            
        </div>
        