<?php

/**
 *
 */
class UsuarioAdmin extends Usuario {

  //atributos
  public $email;
  public $password;

  //constructor
  function __construct(argument)
  {
    // code...
  }

  //Getters
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }

  //setters
  public function setEmail($email){
    $this->email = $email ;
  }
  public function setpassword($password){
    $this->password = $password;
  }

  //metodos
  public function verConsultas(){}
  public function consultarProductos(){}
  public function modificarProductos(){}
}
