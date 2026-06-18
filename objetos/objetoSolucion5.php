<link rel="stylesheet" href="../css/style.css">
<?php
require_once '../clases/Solucion5.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo_cuenta'];
    
    if ($tipo == 'ahorro') {
        $cuenta = new CuentaAhorro();
        $cuenta->setNumeroCuenta($_POST['txt_numeroCuenta']);
        $cuenta->setTitular($_POST['txt_titular']);
        $cuenta->setSaldo($_POST['num_saldo']);
        $cuenta->setTasaInteres($_POST['num_tasaInteres']);
        $cuenta->mostrarResultado();
    } else if ($tipo == 'corriente') {
        $cuenta = new CuentaCorriente();
        $cuenta->setNumeroCuenta($_POST['txt_numeroCuenta']);
        $cuenta->setTitular($_POST['txt_titular']);
        $cuenta->setSaldo($_POST['num_saldo']);
        $cuenta->setLimiteDebitoMensual($_POST['num_limiteMensual']);
        $cuenta->setLimiteDebitoDiario($_POST['num_limiteDiario']);
        $cuenta->mostrarResultado();
    }
}
?>
