<?php

//funcion para validar datos de formulario de registro

function validarRegistroUsuario($arrayRegistro){

$nombre = $apellido = $nombreUsuario = $telefono =
$empresa = $email = $password = $repassword = $imagenPerfil = NULL;
$errores = [];

 if ($arrayRegistro) {
   $flag = true;
   //validar nombre
   if (isset($arrayRegistro["nombre"])) {
     $nombre = $arrayRegistro["nombre"];
     if (empty(trim($arrayRegistro["nombre"]))) {
       $flag = false;
       $errores["nombre"] = "Debe completar el Nombre";
     }
    if (is_numeric($arrayRegistro["nombre"])) {
      $flag = false;
      $errores["nombre"] = "El Nombre no puede contener numeros";
    }
    if (strlen($arrayRegistro["nombre"]) <= 2) {
      $errores["nombre"] = "El nombre debe tener mas de dos caracteres";
    }
   }

   //Validar Apellido
   if (isset($arrayRegistro["apellido"])) {
     $apellido = $arrayRegistro["apellido"];
     if (empty(trim($arrayRegistro["apellido"]))) {
       $flag = false;
       $errores["apellido"] = "Debe completar el Apellido";
     }

    if (is_numeric($arrayRegistro["apellido"])) {
      $flag = false;
      $errores["apellido"] = "El Apellido no puede contener numeros";
    }
    if (strlen($arrayRegistro["apellido"]) <= 2) {
      $errores["apellido"] = "El Apellido debe tener mas de dos caracteres";
    }
   }

   //validar nombre de Usuario
   if (isset($arrayRegistro["nombreUsuario"])) {
     $nombreUsuario = $arrayRegistro["nombreUsuario"];
     if (empty(trim($arrayRegistro["nombreUsuario"]))) {
       $flag = false;
       $errores["nombreUsuario"] = "Debe completar el Nombre de Usuario";
     }

    if (is_numeric($arrayRegistro["nombreUsuario"])) {
      $flag = false;
      $errores["nombreUsuario"] = "El Nombre de Usuario no pueden ser solo numeros";
    }
   }

   //validar telefono
   if(isset($arrayRegistro["telefono"])){
     $telefono = $arrayRegistro["telefono"];
     if (!is_numeric($arrayRegistro["telefono"]) && $arrayRegistro["telefono"] != NULL) {
       $flag = false;
       $errores["telefono"] = "El numero de Telefono no puede contener letras";
     }
     if (empty(trim($arrayRegistro["telefono"]))) {
       $flag = false;
       $errores["telefono"] = "Debe completar el Telefono";
     }
   }
   //validar empresa
   if(isset($arrayRegistro["empresa"])){
     $empresa = $arrayRegistro["empresa"];
   }

   //validar Email
   if (isset($arrayRegistro["email"])) {
     $email = $arrayRegistro["email"];
    if (empty(trim($arrayRegistro["email"]))) {
      $flag = false;
      $errores["email"] = "El Email no puede estar vacio";
    }

    if (!filter_var($arrayRegistro["email"], FILTER_VALIDATE_EMAIL)) {
      $flag = false;
      $errores["email"] = "El Email tiene un formato incorrecto";
      }
   }

   //validar password
   if (isset($arrayRegistro["password"])) {
    $password = $arrayRegistro["password"];
    if (empty(trim($arrayRegistro["password"]))) {
      $flag = false;
      $errores["password"] = "El Password no puede estar vacio";
    }
    if(!empty(trim($arrayRegistro["password"]))){
      $bandera = false;
      for ($i=0; $i < strlen($arrayRegistro["password"]); $i++) {
        if(is_numeric(substr($arrayRegistro["password"],$i,1))){
          $bandera=true;
    }
  }
    if(!$bandera){
      $flag = false;
      $errores["password"] = "La contraseña debe tener al menos un numero";
  }
}

    if (strlen($arrayRegistro["password"]) < 6) {
      $flag = false;
      $errores["password"] = "La Contraseña no puede tener menos de 6 caracteres";
}
   }
   //validacion de $repassword
   if (isset($arrayRegistro["repassword"])) {
     if (empty(trim($_POST["repassword"]))) {
       $flag = false;
       $errores["repassword"] = "Repetir contraseña no puede estar vacio";
     }
     if ($arrayRegistro["password"] != $arrayRegistro["repassword"]) {
       $flag = false;
       $errores["repassword"] = "La contraseña no coincide";
     }
   }
   //validacion de $imagenPerfil
   if ($_FILES["imgPerfil"]["error"] != 0) {
     $errores["imgPerfil"] = "Debe cargar una imagen de perfil";

   }else{
     $ext = pathinfo($_FILES["imgPerfil"]["name"],PATHINFO_EXTENSION);
     if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
       $errores["imgPerfil"] = "Formato de imagen incorrecto";
     }else{
       move_uploaded_file($_FILES["imgPerfil"]["tmp_name"],"imagenesPerfil/imagen." . $ext);
     }
   }

   if (count($errores) === 0) {
     return true;
   }
   else {
     return $errores;
   }

  }
 }
 ?>
