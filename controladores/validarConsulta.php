<?php
//funcion para validar formulario de consultas
function validarFormularioConsultas($arrayDeConsultas){
  //inicio las variales con valor null
  $nombre = $apellido = $email = $textAreaConsulta = NULL;
  $erroresConsultas = [];

  if ($arrayDeConsultas) {
    //valido nombre
    if (isset($arrayDeConsultas["nombre"])) {
      $nombre = $arrayDeConsultas["nombre"];
      if (empty(trim($arrayDeConsultas["nombre"]))) {
        $flag = false;
        $erroresConsultas["nombre"] = "Debe completar el Nombre";
      }
     if (is_numeric($arrayDeConsultas["nombre"])) {
       $flag = false;
       $erroresConsultas["nombre"] = "El Nombre no puede contener numeros";
     }
     if (strlen($arrayDeConsultas["nombre"]) <= 2) {
       $erroresConsultas["nombre"] = "El nombre debe tener mas de dos caracteres";
     }
    }

    //valido Apellido
    if (isset($arrayDeConsultas["apellido"])) {
      $nombre = $arrayDeConsultas["apellido"];
      if (empty(trim($arrayDeConsultas["apellido"]))) {
        $flag = false;
        $erroresConsultas["apellido"] = "Debe completar el Apellido";
      }
     if (is_numeric($arrayDeConsultas["apellido"])) {
       $flag = false;
       $erroresConsultas["apellido"] = "El Apellido no puede contener numeros";
     }
     if (strlen($arrayDeConsultas["apellido"]) <= 2) {
       $erroresConsultas["apellido"] = "El apellido debe tener mas de dos caracteres";
     }
    }

    //validar Email
    if (isset($arrayDeConsultas["email"])) {
      $email = $arrayDeConsultas["email"];
     if (empty(trim($arrayDeConsultas["email"]))) {
       $flag = false;
       $erroresConsultas["email"] = "El Email no puede estar vacio";
     }

     if (!filter_var($arrayDeConsultas["email"], FILTER_VALIDATE_EMAIL)) {
       $flag = false;
       $erroresConsultas["email"] = "El Email tiene un formato incorrecto";
       }
    }
    //validar text area
    if (isset($arrayDeConsultas["textAreaConsulta"])) {
      $nombre = $arrayDeConsultas["textAreaConsulta"];
      if (empty(trim($arrayDeConsultas["textAreaConsulta"]))) {
        $flag = false;
        $erroresConsultas["textAreaConsulta"] = "Debe completar el Area de Consultas";
      }
     if (strlen($arrayDeConsultas["textAreaConsulta"]) <= 10) {
       $erroresConsultas["textAreaConsulta"] = "El area de consultas debe tener mas de 10 caracteres";
     }
    }

    if (count($erroresConsultas) === 0) {
      return true;
    }
    else {
      return $erroresConsultas;
    }

  }
}




 ?>
