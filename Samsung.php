<?php

require_once("Celular.php");

class Samsung extends Celular {
  public function getDestacado() {
    return false;
  }
}
