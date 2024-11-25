<?php
// Coche.php
require_once 'Vehiculo.php';

class Coche extends Vehiculo {
    private $matricula;
    private $kilometros;

    public function __construct($marca, $color, $plazas = 0, $matricula = "") {
        parent::__construct($marca, $color, $plazas);
        $this->kilometros = 0;  // Kilómetros por defecto
        $this->matricula = $matricula;
    }

    // Getter y Setter para la matrícula
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        if (preg_match("/^\d{4} [BCDFGHJKLMNPRSTVWXYZ]{3}$/", $matricula)) {
            $this->matricula = $matricula;
        } else {
            throw new Exception("Matrícula inválida.");
        }
    }

    // Método para saber si el coche puede circular
    public function puedeCircular() {
        return !empty($this->matricula);
    }

    // Getter y Setter para kilómetros
    public function getKilometros() {
        return $this->kilometros;
    }

    public function setKilometros($kilometros) {
        if ($kilometros >= 0) {
            $this->kilometros = $kilometros;
        } else {
            throw new Exception("Los kilómetros no pueden ser negativos.");
        }
    }

    // Método viajar
    public function viajar($km) {
        if (!$this->isAparcado() && $this->puedeCircular() && $km >= 0) {
            $this->kilometros += $km;  // Actualiza los kilómetros
        } else {
            throw new Exception("El coche no puede viajar.");
        }
    }

    // Método __toString para mostrar información del coche
    public function __toString() {
        return parent::__toString() . ", Matrícula: " . $this->getMatricula() . ", Kilómetros: " . $this->getKilometros();
    }
}

?>
