<?php

/**
 *
 */
class Consulta implements UsuarioCliente{

  //atributos
  public $id;

  //Constructor
  function __construct(argument)
  {


  }

  //Getters
  public function getId(){
    return $this->id;
  }

  //setters
  public function setId($id){
    $this->id = $id ;
  }

  //metodos
  public function mostrarConsultas(){}
  public function guardarConsultas(){}

}
