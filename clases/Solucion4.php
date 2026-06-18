<?php
class Vehiculo {
    public $placa;
    public $marca;
    public $modelo;
    public $precio;

    public function setPlaca($placa) {
        $this->placa = $placa;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function mostrarResultado() {
        echo "Placa: " . $this->placa . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Precio: " . $this->precio . "<br>";
    }
}

class Automovil extends Vehiculo {
    public $tipoVehiculo;
    public $numeroPuertas;
    public $tipoCombustible;

    public function setTipoVehiculo($tipoVehiculo) {
        $this->tipoVehiculo = $tipoVehiculo;
    }
    public function setNumeroPuertas($numeroPuertas) {
        $this->numeroPuertas = $numeroPuertas;
    }
    public function setTipoCombustible($tipoCombustible) {
        $this->tipoCombustible = $tipoCombustible;
    }
    public function mostrarResultado() {
        parent::mostrarResultado();
        echo "Tipo de Vehículo: " . $this->tipoVehiculo . "<br>";
        echo "Número de Puertas: " . $this->numeroPuertas . "<br>";
        echo "Tipo de Combustible: " . $this->tipoCombustible . "<br>";
    }
}

class Motocicleta extends Vehiculo {
    public $cilindrada;
    public $tipoMoto;

    public function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }
    public function setTipoMoto($tipoMoto) {
        $this->tipoMoto = $tipoMoto;
    }
    public function mostrarResultado() {
        parent::mostrarResultado();
        echo "Cilindrada: " . $this->cilindrada . "<br>";
        echo "Tipo de Moto: " . $this->tipoMoto . "<br>";
    }
}
?>
