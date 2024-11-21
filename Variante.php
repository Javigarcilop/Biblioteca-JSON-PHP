<?php
class Variante {
    public $formato;
    public $precio;

    public function __construct($formato, $precio) {
        $this->formato = $formato;
        $this->precio = $precio;
    }
}
?>
