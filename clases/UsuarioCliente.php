<?php

/**
 *
 */
class UsuarioCliente extends Usuario {

  //atributos
  public $email;
  public $password;

  //constructor
  function __construct(argument)
  {

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
    $this->email = $email;
  }
  public function setPassword($password){
    $this->password = $password;
  }

  //metodos
  public function realizarCompras(){}
  public function llenarCarrito(){}
  public function realizarConsultas(){}
}
