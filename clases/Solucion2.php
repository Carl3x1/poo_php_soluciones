<?php
    class Empleado{
        public $nombre;
        public $puesto;
        public $horas;
        public $pago_hora;
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function setPuesto($puesto) {
            $this->puesto = $puesto;
        }
        public function setHoras($horas) {
            $this->horas = $horas;
        }
        public function setPagoHora($pago_hora) {
            $this->pago_hora = $pago_hora;
        }
        public function mostrarResultado() {
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Puesto: " . $this->puesto . "<br>";
            echo "Horas trabajadas: " . $this->horas . "<br>";
            echo "Pago por hora: " . $this->pago_hora . "<br>";
            $sueldo = $this->horas * $this->pago_hora;
            echo "Sueldo: " . $sueldo . "<br>";
        }
    }