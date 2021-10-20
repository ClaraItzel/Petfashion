<?php

session_start();
if(!isset($_SESSION['usuario'])){
  echo"<script>
alert('Inicie sesion');
    location.href='login.php';
    </script>
";
  
  session_destroy();
  die(); 
}

?>