<?php

//funcion para validar login
function validarLogin($arrayLogin){

  $email = NULL;
  $password = NULL;

  $erroresLogin = [];

  if ($arrayLogin) {
    $flag = true;

    if (isset($arrayLogin["email"])) {
      $email = $arrayLogin["email"];
      if (empty(trim($arrayLogin["email"]))) {
        $flag = false;
        $erroresLogin["email"] = "El Email no puede estar vacio";
      }
      if (!filter_var($arrayLogin["email"], FILTER_VALIDATE_EMAIL)) {
        $flag = false;
        $erroresLogin["email"] = "El Email tiene un formato incorrecto";
        }
    }

    //validar password
    if (isset($arrayLogin["password"])) {
     $password = $arrayLogin["password"];
     if (empty(trim($arrayLogin["password"]))) {
       $flag = false;
       $erroresLogin["password"] = "El Password no puede estar vacio";
     }
     if(!empty(trim($arrayLogin["password"]))){
       $bandera = false;
       for ($i=0; $i < strlen($arrayLogin["password"]); $i++) {
         if(is_numeric(substr($arrayLogin["password"],$i,1))){
           $bandera=true;
     }
   }
     if(!$bandera){
       $flag = false;
       $erroresLogin["password"] = "La contraseña debe tener al menos un numero";
   }
 }

     if (strlen($arrayLogin["password"]) < 6) {
       $flag = false;
       $erroresLogin["password"] = "La Contraseña no puede tener menos de 6 caracteres";
 }
    }

    //Validar que el usuario se encuentre en la
    //de no encontrarse enviarlo a registro

    if (count($erroresLogin) === 0) {
      return true;
    }
    else {
      return $erroresLogin;
    }
  }

}











 ?>
