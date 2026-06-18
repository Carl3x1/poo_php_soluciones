<link rel="stylesheet" href="../css/style.css">
<?php
require_once '../clases/Solucion2.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empleado = new Empleado();
    $empleado->setNombre($_POST['txt_nombre']);
    $empleado->setPuesto($_POST['txt_puesto']);
    $empleado->setHoras($_POST['num_horas']);
    $empleado->setPagoHora($_POST['num_pago_hora']);
    $empleado->mosrtarResultado();
}