<?php
function guardarUsuarioLogueado(){

    //registro al Usuario y lo guardo en array
    $usuarioLogueado = [
      "nombre" => $_POST["nombre"],
      "apellido" => $_POST["apellido"],
      "nombreUsuario" => $_POST["nombreUsuario"],
      "telefono" => $_POST["telefono"],
      "empresa" => $_POST["empresa"],
      "email" => $_POST["email"],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
      "imgPerfil" => $_FILES["imgPerfil"]
    ];

    //envia datos al archivo usuario.json
    $jsonUsuario = json_encode($usuarioLogueado);
    file_put_contents("usuarios.json",$jsonUsuario . PHP_EOL,FILE_APPEND);

    // recupera usuarios del archivo json
    $jsonUsuariosGuardados = file_get_contents("usuarios.json");
    $explodeDeUsuarios = explode(PHP_EOL,$jsonUsuariosGuardados);
    //elimina la ultima posicion del array
    array_pop($explodeDeUsuarios);

    //guardar imagen de Perfil


    if ($_FILES["imgPerfil"]["error"] === UPLOAD_ERR_OK) {
      $nombre = $_FILES["imgPerfil"]["name"];
      $archivo = $_FILES["imgPerfil"]["tmp_name"];
      $ext = pathinfo($nombre,PATHINFO_EXTENSION);

      $ArchivoRuta = dirname(__FILE__);
      $ArchivoRuta = $ArchivoRuta . "/imagenesPerfil";
      $ArchivoRuta = $ArchivoRuta . "/imgPerfil." . $ext;

      move_uploaded_file($archivo , $ArchivoRuta);
      }
  }



 ?>
