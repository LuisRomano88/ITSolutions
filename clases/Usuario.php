<?php

/**
 *
 */
abstract class Usuario
{
  //atributos
  public $id;
  public $nombre;
  public $apellido;
  public $dni;
  public $cuit;

  //constructor
  function __construct(argument)
  {
    // code...
  }

  //Getters
  public function getId(){
    return $this->id;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function getDni(){
    return $this->dni;
  }
  public function getCuit(){
    return $this->cuit;
  }

  //setters
  public function setId($id){
    $this->id = $id;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre ;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido ;
  }
  public function setDni($dni){
    $this->dni = $dni;
  }
  public function setCuit($cuit){
    $this->cuit = $cuit;
  }
  //metodos
  public function altaUsuario(){}
  public function bajaUsuario(){}
  public function modificarUsuario(){}
}
