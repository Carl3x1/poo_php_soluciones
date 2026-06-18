<link rel="stylesheet" href="../css/style.css">
<?php
require_once '../clases/Solucion1.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = new Producto();
    $producto->setCodigo($_POST['txt_codigo']);
    $producto->setNombre($_POST['txt_nombre']);
    $producto->setPrecio($_POST['num_precio']);
    $producto->setExistencia($_POST['num_existencia']);
    $producto->mostrarResultado();
}
?>
