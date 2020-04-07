<?php

include_once("controladores/validacionLogin.php");
include_once("controladores/persistirDatos.php");


session_start();

$arrayDeErroresLogin = "";
if ($_POST) {

  $arrayDeErroresLogin = validarLogin($_POST);
  if ($arrayDeErroresLogin) {
    $jsonUsuariosGuardados = file_get_contents("usuarios.json");
    $explodeDeUsuarios = explode(PHP_EOL,$jsonUsuariosGuardados);
    array_pop($explodeDeUsuarios);

    //recorro los usuarios guardados con un foreach
    //para iniciar sesion
    foreach ($explodeDeUsuarios as $usuarioJson) {
      $userFinal = json_decode($usuarioJson, true);
      if ($userFinal["email"] == $_POST["email"]) {
        if (password_verify($_POST["password"], $userFinal["password"])) {
            $_SESSION["nombre"] = $userFinal["nombre"];
            $_SESSION["apellido"] = $userFinal["apellido"];
            $_SESSION["imgPerfil"] = $userFinal["imgPerfil"];
            header("Location: index.php");
          }
        }
      }
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
  <section class="seccion" id="seccion">
      <div class="col sm-12 col-md-6 col-lg-6 bg-secondary ml-auto mr-auto mt-3">
        <form class="px-4 py-3" action="" method="post">
          <div class="form-group">
            <label for="email">Direccion Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com" value="<?= persistir($arrayDeErroresLogin,"email") ?>">
            <small class="text-danger"><?= isset($arrayDeErroresLogin["email"]) ? $arrayDeErroresLogin["email"] : "" ?></small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="">
            <small class="text-danger"><?= isset($arrayDeErroresLogin["password"]) ? $arrayDeErroresLogin["password"] : "" ?></small>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="recordarme" name="recordarme">
              <label class="form-check-label" for="dropdownCheck">
                Recodarme
              </label>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" name="button" class="btn btn-primary btn-lg mt-3 ">Iniciar Sesion</button>
          </div>
        </form>
      </div>
  </section>
  <?php include_once("footer.php"); ?>
</html>
