<?php

/**
 *
 */
class Categoria {

  //atributos
  public $id;
  public $nombreCategoria;

  //Constructor
  function __construct(argument)
  {
    // code...
  }

  //Getters
  public function getId(){
    return $this->id;
  }
  public function getNombreCategoria(){
    return $this->nombreCategoria;
  }

  //setters
  public function setId($id){
    $this->id = $id ;
  }
  public function setNombreCategoria($nombreCategoria){
    $this->nombreCategoria = $nombreCategoria ;
  }

  // metodos
  public function altaMarca(){}
  public function bajaMarca(){}
  public function modificarMarca(){}
}
