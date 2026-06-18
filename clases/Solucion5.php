<?php
class CuentaBancaria {
    public $numeroCuenta;
    public $titular;
    public $saldo;

    public function setNumeroCuenta($numeroCuenta) {
        $this->numeroCuenta = $numeroCuenta;
    }
    public function setTitular($titular) {
        $this->titular = $titular;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function mostrarResultado() {
        echo "Número de Cuenta: " . $this->numeroCuenta . "<br>";
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo: " . $this->saldo . "<br>";
    }
}

class CuentaAhorro extends CuentaBancaria {
    public $tasaInteres;

    public function setTasaInteres($tasaInteres) {
        $this->tasaInteres = $tasaInteres;
    }
    public function mostrarResultado() {
        parent::mostrarResultado();
        echo "Tasa de Interés: " . $this->tasaInteres . "<br>";
    }
}

class CuentaCorriente extends CuentaBancaria {
    public $limiteDebitoMensual;
    public $limiteDebitoDiario;

    public function setLimiteDebitoMensual($limiteDebitoMensual) {
        $this->limiteDebitoMensual = $limiteDebitoMensual;
    }
    public function setLimiteDebitoDiario($limiteDebitoDiario) {
        $this->limiteDebitoDiario = $limiteDebitoDiario;
    }
    public function mostrarResultado() {
        parent::mostrarResultado();
        echo "Límite de Débito Mensual: " . $this->limiteDebitoMensual . "<br>";
        echo "Límite de Débito Diario: " . $this->limiteDebitoDiario . "<br>";
    }
}
?>
