<?php
class Empleado {
    public $codigoEmpleado;
    public $nombre;
    public $puesto;
    public $sueldoBase;

    public function setCodigoEmpleado($codigoEmpleado) {
        $this->codigoEmpleado = $codigoEmpleado;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setPuesto($puesto) {
        $this->puesto = $puesto;
    }
    public function setSueldoBase($sueldoBase) {
        $this->sueldoBase = $sueldoBase;
    }
    public function mostrarResultado() {
        echo "Código de Empleado: " . $this->codigoEmpleado . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Puesto: " . $this->puesto . "<br>";
        echo "Sueldo Base: " . $this->sueldoBase . "<br>";
    }
}

class EmpleadoTiempoCompleto extends Empleado {
    public $bono;

    public function setBono($bono) {
        $this->bono = $bono;
    }
    public function mostrarResultado() {
        parent::mostrarResultado();
        echo "Bono: " . $this->bono . "<br>";
        
        $totalGanado = $this->sueldoBase + $this->bono;
        $igss = $this->sueldoBase * 0.0483;
        $sueldoLiquido = $totalGanado - $igss;
        
        echo "Total ganado: " . $totalGanado . "<br>";
        echo "IGSS: " . $igss . "<br>";
        echo "Sueldo líquido: " . $sueldoLiquido . "<br>";
    }
}

class EmpleadoPorHoras extends Empleado {
    public $horasTrabajadas;
    public $pagoPorHora;

    public function setHorasTrabajadas($horasTrabajadas) {
        $this->horasTrabajadas = $horasTrabajadas;
    }
    public function setPagoPorHora($pagoPorHora) {
        $this->pagoPorHora = $pagoPorHora;
    }
    public function mostrarResultado() {
        parent::mostrarResultado();
        echo "Horas Trabajadas: " . $this->horasTrabajadas . "<br>";
        echo "Pago por Hora: " . $this->pagoPorHora . "<br>";
        
        $totalGanado = $this->sueldoBase + ($this->horasTrabajadas * $this->pagoPorHora);
        $igss = $this->sueldoBase * 0.0483;
        $sueldoLiquido = $totalGanado - $igss;
        
        echo "Total ganado: " . $totalGanado . "<br>";
        echo "IGSS: " . $igss . "<br>";
        echo "Sueldo líquido: " . $sueldoLiquido . "<br>";
    }
}
?>
