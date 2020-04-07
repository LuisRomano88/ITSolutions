<?php
function guardarConsulta(){
  $consultaEnviada = [
    "nombre" => $_POST["nombre"],
    "apellido" => $_POST["apellido"],
    "email" => $_POST["email"],
    "textAreaConsulta" => $_POST["textAreaConsulta"]
  ];

  //envia datos al archivo usuario.json
  $jsonConsulta = json_encode($consultaEnviada);
  file_put_contents("consulta.json",$jsonConsulta . PHP_EOL,FILE_APPEND);

  // recupera usuarios del archivo json
  $jsonConsultaGuardada = file_get_contents("consulta.json");
}



 ?>
