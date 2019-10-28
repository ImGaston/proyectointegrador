<?php
declare(strict_types = 1);

require_once("Renderizable.php");
require_once("Monedas.php");

abstract class Celular implements Renderizable {
  protected $modelo;
  protected $marca;
  // protected $capacidad;
  // protected $color;
  // protected $precio;
  protected $imagen;

  public function __construct(string $modelo, string $marca, int $capacidad, string $color, float $precio, string $imagen) {
    $this->modelo = $modelo;
    $this->marca = $marca;
  //  $this->capacidad = $capacidad;
//    $this->color = $color;
//    $this->precio = $precio;
    $this->imagen = $imagen;
  }

  public function getDisplayName() {
    return $this->getMarca() . " " . $this->getModelo();
  }

  public abstract function getDestacado();

  public function render() {
    require("template.php");
  }

  public static function obtenerCelulares() {
    $json = file_get_contents("celulares.json");
    $arr = json_decode($json, true);
    $celulares = [];
    foreach ($arr as $celularData) {
      if ($celularData["marca"] == "iPhone") {
        $celular = new IPhone($celularData["modelo"], $celularData["marca"], $celularData["imagen"], true);
      } else {
        $celular = new Samsung($celularData["modelo"], $celularData["marca"], $celularData["imagen"]);
      }
      $celulares[] = $celular;
    }
    return $celulares;
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  public function setMarca($marca) {
    $this->marca = $marca;
  }

  public function getMarca() {
    return $this->marca;
  }

  // public function setCapacidad(int $capacidad) {
  //   $this->capacidad = $capacidad;
  // }
  //
  // public function getCapacidad() {
  //   return $this->capacidad . "gb";
  // }
  //
  // public function setColor($color) {
  //   $this->color = $color;
  // }
  //
  // public function getColor() {
  //   return $this->color;
  // }
  //
  // public function setPrecio($precio) {
  //   $this->precio = $precio;
  // }
  //
  // public function getPrecio() {
  //   return "ARS $" . Monedas::pasarAPesos($this->precio);
  // }

  public function setImagen($imagen) {
    $this->imagen = $imagen;
  }

  public function getImagen() {
    return $this->imagen;
  }
}
