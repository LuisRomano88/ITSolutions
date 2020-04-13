<?php

/**
 *
 */
class Compra {

  //atributos
  public $id;
  public $fecha;
  public $formaDePago;
  public $subtotal;
  public $total;
  public $detalle;

  //constructor
  function __construct(argument)
  {

  }
  //Getters
  public function getId(){
    return $this->id;
  }
  public function getfecha(){
    return $this->fecha;
  }
  public function getDetalle(){
    return $this->detalle;
  }
  public function getFormaDePago(){
    return $this->formaDePago;
  }
  public function getSubtotal(){
    return $this->subtotal;
  }
  public function getTotal(){
    return $this->total;
  }

  //setters
  public function setId($id){
    $this->id = $id ;
  }
  public function setFecha($fecha){
    $this->fecha = $fecha ;
  }
  public function setDetalle($detalle){
    $this->detalle = $detalle ;
  }
  public function setFormaDepago($formaDePago){
    $this->formaDePago = $formaDePago ;
  }
  public function setSubtotal($subtotal){
    $this->subtotal = $subtotal ;
  }
  public function setTotal($total){
    $this->total = $total;
  }

  //metodos
  public function realizarPago(){}
  public function informarCompra(){}

}
