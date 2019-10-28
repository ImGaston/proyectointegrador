<?php

require_once("Celular.php");

class IPhone extends Celular {
  protected $faceID;

  public function __construct(string $modelo, string $marca, int $capacidad, string $color, float $precio, string $imagen, $faceID) {
    parent::__construct($modelo, $marca, $capacidad, $color, $precio, $imagen);
    $this->$faceID = $faceID;
  }

  public function getDestacado() {
    return true;
  }
}
