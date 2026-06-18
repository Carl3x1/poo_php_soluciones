<link rel="stylesheet" href="../css/style.css">
<?php
require_once '../clases/Solucion4.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo_clase'];
    
    if ($tipo == 'automovil') {
        $vehiculo = new Automovil();
        $vehiculo->setPlaca($_POST['txt_placa']);
        $vehiculo->setMarca($_POST['txt_marca']);
        $vehiculo->setModelo($_POST['txt_modelo']);
        $vehiculo->setPrecio($_POST['num_precio']);
        $vehiculo->setTipoVehiculo($_POST['txt_tipoVehiculo']);
        $vehiculo->setNumeroPuertas($_POST['num_puertas']);
        $vehiculo->setTipoCombustible($_POST['txt_combustible']);
        $vehiculo->mostrarResultado();
    } else if ($tipo == 'motocicleta') {
        $vehiculo = new Motocicleta();
        $vehiculo->setPlaca($_POST['txt_placa']);
        $vehiculo->setMarca($_POST['txt_marca']);
        $vehiculo->setModelo($_POST['txt_modelo']);
        $vehiculo->setPrecio($_POST['num_precio']);
        $vehiculo->setCilindrada($_POST['txt_cilindrada']);
        $vehiculo->setTipoMoto($_POST['txt_tipoMoto']);
        $vehiculo->mostrarResultado();
    }
}
?>
