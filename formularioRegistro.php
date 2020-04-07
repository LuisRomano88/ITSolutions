
<?php
include_once("controladores/validarRegistro.php");
include_once("controladores/guardarUsuario.php");
include_once("controladores/persistirDatos.php");
$arrayDeErrores = "";
    if ($_POST) {
    $arrayDeErrores = validarRegistroUsuario($_POST);
      if ($arrayDeErrores) {
        $usuarioLogueado = guardarUsuarioLogueado($_POST);
        header("Location: index.php");
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
  <?php include_once("header.php"); ?>
  <section class="mt-3" id="seccion">
    <div class="col sm-12 col-md-6 col-lg-6 bg-secondary ml-auto mr-auto" >
      <form class="px-4 py-3" action="" method="post" enctype="multipart/form-data">
        <h3 class="text-center">Registrarme</h3>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control" value="<?= persistir($arrayDeErrores,"nombre") ?>">
          <small style="color: red" ><?= isset($arrayDeErrores["nombre"]) ? $arrayDeErrores["nombre"] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" id="apellido" name="apellido" value="<?= persistir($arrayDeErrores,"apellido") ?>" class="form-control" placeholder="">
          <small style="color: red" ><?= isset($arrayDeErrores["apellido"]) ? $arrayDeErrores["apellido"] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="nombreUsuario">Nombre de Usuario</label>
          <input type="text" id="nombreUsuario" name="nombreUsuario" value="<?= persistir($arrayDeErrores,"nombreUsuario") ?>" class="form-control" placeholder="">
          <small style="color: red" ><?= isset($arrayDeErrores["nombreUsuario"]) ? $arrayDeErrores["nombreUsuario"] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <input type="text" id="telefono" name="telefono" value="<?= persistir($arrayDeErrores,"telefono") ?>" class="form-control" placeholder="">
          <small style="color: red"><?= isset($arrayDeErrores["telefono"]) ? $arrayDeErrores["telefono"] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="empresa">Empresa</label>
          <input type="text" id="empresa" name="empresa" value="<?= persistir($arrayDeErrores,"empresa") ?>" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label for="email">Direccion Email</label>
          <input type="email" id="email" name="email" value="<?= persistir($arrayDeErrores,"email") ?>" class="form-control" placeholder="email@example.com">
          <small style="color: red" ><?= isset($arrayDeErrores["email"]) ? $arrayDeErrores["email"] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Minimo 6 caracteres">
          <small style="color: red" ><?= isset($arrayDeErrores["password"]) ? $arrayDeErrores["password"] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="repassword">Repetir Password</label>
          <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Minimo 6 caracteres">
          <small style="color: red" ><?= isset($arrayDeErrores["repassword"]) ? $arrayDeErrores["repassword"] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="">Seleccionar Foto de Perfil</label>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="imgPerfil" value="">
          <label class="custom-file-label" for="customFileLang"></label>
          <small style="color: red" ><?= isset($arrayDeErrores["imgPerfil"]) ? $arrayDeErrores["imgPerfil"] : "" ?></small>
        </div>
        <div class="form-group  text-center">
          <button type="submit" name="button" class="btn btn-primary btn-lg mt-3">Enviar</button>
        </div>
      </form>
    </div>
  </section>
  <?php include_once("footer.php"); ?>
</html>
