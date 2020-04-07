<?php
  include_once("controladores/validarConsulta.php");
  include_once("controladores/guardarConsulta.php");
  include_once("controladores/persistirDatos.php");

  $arrayErroresConsultas = "";
  if ($_POST) {
    $arrayErroresConsultas = validarFormularioConsultas($_POST);
    if ($arrayErroresConsultas) {
      $consultaEnviada = guardarConsulta($_POST);
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Soluciones IT</title>
  </head>
  <section class="seccion mt-3" id="seccion">
    <div class="container border border-secondary">
      <div class="row-lg-8">
        <h2 class="text-center">CONTACTANOS</h2>
      </div>
      <form class="ml-auto mr-auto" action="" method="POST">
        <div class="form-group">
          <input type="text" name="nombre" value="<?= persistir($arrayErroresConsultas,"nombre") ?>" class="form-control" placeholder="Nombre">
          <small style="color: red" ><?= isset($arrayErroresConsultas["nombre"]) ? $arrayErroresConsultas["nombre"] : "" ?></small>
        </div>
        <div class="form-group">
          <input type="text" name="apellido" value="<?= persistir($arrayErroresConsultas,"apellido") ?>" class="form-control" placeholder="Apellido">
          <small style="color: red" ><?= isset($arrayErroresConsultas["apellido"]) ? $arrayErroresConsultas["apellido"] : "" ?></small>
        </div>
        <div class="form-group">
          <input type="email" name="email" value="<?= persistir($arrayErroresConsultas,"email") ?>" class="form-control" placeholder="email@ejemplo.com">
          <small style="color: red" ><?= isset($arrayErroresConsultas["email"]) ? $arrayErroresConsultas["email"] : "" ?></small>
        </div>
          <textarea name="textAreaConsulta" rows="5" value="<?= persistir($arrayErroresConsultas,"textAreaConsulta") ?>" style="width:100%" placeholder="Escribe tu Mensaje Aqui"></textarea>
          <small style="color: red" ><?= isset($arrayErroresConsultas["textAreaConsulta"]) ? $arrayErroresConsultas["textAreaConsulta"] : "" ?></small>
        </div>
        <div class="form-group  text-center">
          <button type="submit" name="button" class="btn btn-secondary btn-lg mt-3" >Enviar</button>
        </div>
      </form>
    </div>
  </section>
</html>
