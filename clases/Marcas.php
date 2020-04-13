<?php

/**
 *
 */
class Marcas {

  //atributos
  public $id;
  public $nombreMarca;

  //constructor
  function __construct(argument)
  {
    // code...
  }

  //Getters
  public function getId(){
    return $this->id;
  }
  public function getNombreMarca(){
    return $this->nombreMarca;
  }

  //setters
  public function setId($id){
    $this->id = $id ;
  }
  public function setNombreMarca($nombreMarca){
    $this->nombreMarca = $nombreMarca;
  }
  //metodos
  public function altaMarca(){}
  public function bajaMarca(){}
  public function modificarMarca(){}


}
