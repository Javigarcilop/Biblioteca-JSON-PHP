<?php
class Libro {
    public $titulo;
    public $autor;
    public $precio;
    public $variantes = [];

    public function __construct($titulo, $autor, $precio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }

    public function agregarVariante($variante) {
        $this->variantes[] = $variante;
    }
}
?>