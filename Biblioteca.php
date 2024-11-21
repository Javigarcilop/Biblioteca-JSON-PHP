<?php
class Biblioteca {
    public $categorias = [];

    public function agregarCategoria($categoria) {
        $this->categorias[] = $categoria;
    }
}
?>
