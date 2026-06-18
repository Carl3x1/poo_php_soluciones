<?php
class Libro {
    private $isbn;
    private $titulo;
    private $autor;
    private $anioPublicacion;

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function setAnioPublicacion($anioPublicacion) {
        $this->anioPublicacion = $anioPublicacion;
    }
    public function mostrarResultado() {
        echo "ISBN: " . $this->isbn . "<br>";
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Año de Publicación: " . $this->anioPublicacion . "<br>";
    }
}
?>
