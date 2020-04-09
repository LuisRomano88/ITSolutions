<?php


  session_start();
  unset($_SESSION["nombre"]);
  unset($_SESSION["apellido"]);
  unset($_SESSION["imgPerfil"]);
  session_destroy();






 ?>
 <div class="dropdown ml-auto mr-auto mt-2">
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Login
   </button>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="login.php">Iniciar Sesion</a>
     <a class="dropdown-item" href="formularioRegistro.php">Registrarme</a>
   </div>
 </div>
