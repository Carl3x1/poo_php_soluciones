<link rel="stylesheet" href="../css/style.css">
<?php
require_once '../clases/Solucion3.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libro = new Libro();
    $libro->setIsbn($_POST['txt_isbn']);
    $libro->setTitulo($_POST['txt_titulo']);
    $libro->setAutor($_POST['txt_autor']);
    $libro->setAnioPublicacion($_POST['num_anio']);
    $libro->mostrarResultado();
}
?>
