<?php

/**
 *
 */
class Productos
{

  //atributos
  public $id;
  public $nombre;
  public $precio;
  public $foto;
  public $descripcion;
  public $disponibilidad;

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
  public function getPrecio(){
    return $this->precio;
  }
  public function getFoto(){
    return $this->foto;
  }
  public function getDescripcion(){
    return $this->descripcion;
  }
  public function getDisponibilidad(){
    return $this->disponibilidad;
  }

  //setters
  public function setId($id){
    $this->id = $id;
  }
  public function setnombre($nombre){
    $this->nombre = $nombre ;
  }
  public function setPrecio($precio){
    $this->precio = $precio ;
  }
  public function setFoto($foto){
    $this->foto = $foto ;
  }
  public function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
  }

  //metodos
  public function altaProducto(){}
  public function bajaProducto(){}
  public function modificarProducto(){}

}
