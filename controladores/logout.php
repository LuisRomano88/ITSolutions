<?php

session_start();
unset($_SESSION["nombre"]);
unset($_SESSION["apellido"]);
unset($_SESSION["imgPerfil"])
session_destroy();
header("Location:index.php");



 ?>
