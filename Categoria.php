<?php
class Categoria {
    public $nombre;
    public $libros = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }
}
?>
