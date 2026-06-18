<link rel="stylesheet" href="../css/style.css">
<?php
require_once '../clases/Solucion6.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo_empleado'];
    
    if ($tipo == 'tiempo_completo') {
        $empleado = new EmpleadoTiempoCompleto();
        $empleado->setCodigoEmpleado($_POST['txt_codigo']);
        $empleado->setNombre($_POST['txt_nombre']);
        $empleado->setPuesto($_POST['txt_puesto']);
        $empleado->setSueldoBase($_POST['num_sueldoBase']);
        $empleado->setBono($_POST['num_bono']);
        $empleado->mostrarResultado();
    } else if ($tipo == 'por_horas') {
        $empleado = new EmpleadoPorHoras();
        $empleado->setCodigoEmpleado($_POST['txt_codigo']);
        $empleado->setNombre($_POST['txt_nombre']);
        $empleado->setPuesto($_POST['txt_puesto']);
        $empleado->setSueldoBase($_POST['num_sueldoBase']);
        $empleado->setHorasTrabajadas($_POST['num_horas']);
        $empleado->setPagoPorHora($_POST['num_pagoHora']);
        $empleado->mostrarResultado();
    }
}
?>
