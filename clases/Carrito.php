<?php

/**
 *
 */
class Carrito{

  //atributos
  public $id;
  public $productos;
  public $cantidadProductos;

  //Constructor
  function __construct(argument)
  {
    // code...
  }

  //Getters
  public function getId(){
    return $this->id;
  }
  public function getProductos(){
    return $this->productos;
  }
  public function getCantidadProductos(){
    return $this->cantidadProductos;
  }

  //setters
  public function setId($id){
    $this->id = $id;
  }
  public function setProductos($productos){
    $this->productos = $productos ;
  }
  public function setCantidadProductos($cantidadProductos){
    $this->cantidadProductos = $cantidadProductos ;
  }

  //metodos
  public function agregarPruductos(){

  }
  public function sumarProductos(){

  }

}
