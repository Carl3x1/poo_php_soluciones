<?php
class Producto {
    public $codigo;
    public $nombre;
    public $precio;
    public $existencia;
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function setExistencia($existencia) {
        $this->existencia = $existencia;
    }
    public function mostrarResultado() {
        echo "Código: " . $this->codigo . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Existencia: " . $this->existencia . "<br>";   
        $total_inventario = $this->precio * $this->existencia;
        echo "Total de inventario: " . $total_inventario . "<br>";
    }
}
?>
