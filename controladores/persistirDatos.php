<?php
//funcion para persistir datos en un formulario
function persistir($arrayErrores, $campo){

  if(isset($arrayErrores[$campo])){
    return "";
  }else {
  if (isset($_POST[$campo])) {
    return $_POST[$campo];
  }
}
}
 ?>
