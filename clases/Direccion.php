<?php

/**
 *
 */
class Direccion {

  //atributos
  public $provincia;
  public $departamento;
  public $calle;
  public $numeracion;
  public $telefono;
  public $email;

  //Constructor
  function __construct(argument)
  {
    // code...
  }

  //Getters
  public function getProviancia(){
    return $this->provincia;
  }
  public function getDepartamento(){
    return $this->departamento;
  }
  public function getCalle(){
    return $this->calle;
  }
  public function getNumeracion(){
    return $this->numeracion;
  }
  public function getTelefono(){
    return $this->telefono;
  }

  //setters
  public function setProvincia($provincia){
    $this->provincia = $provincia ;
  }
  public function setDepartamento($departamento){
    $this->departamento = $departamento;
  }
  public function setCalle($calle){
    $this->calle = $calle;
  }
  public function setNumeracion($numeracion){
    $this->numeracion = $numeracion;
  }
  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }

  //metodos
  public function modificarDomicilio(){}
}
