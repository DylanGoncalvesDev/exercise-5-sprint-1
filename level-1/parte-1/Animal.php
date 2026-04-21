<?php
  abstract class Animal {
  //atributos//
  private $nombre = "";

  //constructor//
  public function __construct(string $nombre) {
    $this->nombre = $nombre;
  }
  //getter//
  public function getNombre () : string {
    return $this-> nombre;
  }
  //setter//
  public function setNombre (string $nombre) {
    $this->nombre = $nombre;
  }

  //metodo hablar que debera ser rellenado por las subclases//
  abstract public function hablar () : string;  

 }

?> 