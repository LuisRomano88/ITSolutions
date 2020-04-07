<?php

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


<section>
  <div class="text-center">
    <img src="img/Logo.jpeg" alt="" class="" >
  </div>
  <nav class="navbar navbar-expand-lg bg-secondary ">
    <a class="navbar-brand" href="#">

    </a>
    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Menu
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION)): ?>
          <li>
            <img class="img-thumbnail" src="imagenesPerfil/<?= $_SESSION["imgPerfil"] ?>" alt="">
          </li>
          <li>
            <p class="text-uppercase font-weight-bold" ><?= $_SESSION["nombre"]; ?></p>
          </li>
          <li>
            <p class="text-uppercase font-weight-bold"><?= $_SESSION["apellido"]; ?></p>
          </li>
      <?php endif; ?>

      </div>
        <li class=" nav-item btn btn-secondary mt-2">
          <a class="nav-link text-white" href="#">Catalogo</a>
        </li>
        <li class=" nav-item btn btn-secondary mt-2">
          <a class="nav-link text-white" href="#">Servicios</a>
        </li>
        <li class=" nav-item btn btn-secondary mt-2">
          <a class="nav-link text-white" href="#">Nosotros</a>
        </li>
        <li class=" nav-item btn btn-secondary mt-2">
          <a class="nav-link text-white" href="#">Contacto</a>
        </li>
        <div class="dropdown ml-auto mr-auto mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="login.php">Iniciar Sesion</a>
            <a class="dropdown-item" href="formularioRegistro.php">Registrarme</a>
            <?php if(! empty($_SESSION["nombre"])) : ?>
            <a class="dropdown-item" name="cerrarSesion" href=""><?= "Cerrar Sesion" ?></a>
            <? endif; ?>
          </div>
        </div>
      </ul>
    </div>
  </nav>

</section>
</html>
