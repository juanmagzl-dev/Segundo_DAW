<?php

class Vehiculo {
    private $marca;
    private $color;
    private $plazas;
    private $aparcado;

    public function __construct($marca = '', $color = '', $plazas = 0) {
        $this->marca = $marca;
        $this->color = $color;
        $this->plazas = max(0, $plazas); // Asegura que sea un número positivo
        $this->aparcado = true; // Por defecto está aparcado
    }

    // Getters y setters para marca
    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    // Getters y setters para color
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    // Getters y setters para plazas
    public function getPlazas() {
        return $this->plazas;
    }

    public function setPlazas($plazas) {
        if ($plazas > 0) {
            $this->plazas = $plazas;
        }
    }

    // Método para aparcar
    public function aparcar() {
        $this->aparcado = true;
    }

    // Método para arrancar
    public function arrancar() {
        $this->aparcado = false;
    }

    // Método para verificar si está aparcado
    public function isAparcado() {
        return $this->aparcado;
    }

    // Método toString
    public function toString() {
        $estado = $this->aparcado ? 'Aparcado' : 'En marcha';
        return "Marca: $this->marca, Color: $this->color, Plazas: $this->plazas, Estado: $estado";
    }
}

class Coche extends Vehiculo {
    private $matricula;
    private $kilometros;

    public function __construct($marca = '', $color = '', $plazas = 0, $matricula = '', $kilometros = 0) {
        parent::__construct($marca, $color, $plazas);
        $this->matricula = '';
        $this->setMatricula($matricula); // Valida matrícula al asignarla
        $this->kilometros = max(0, $kilometros); // Asegura que sea no negativo
    }

    // Getters y setters para matrícula
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        if ($this->validarMatricula($matricula)) {
            $this->matricula = $matricula;
        }
    }

    // Getters y setters para kilómetros
    public function getKilometros() {
        return $this->kilometros;
    }

    public function setKilometros($kilometros) {
        if ($kilometros >= 0) {
            $this->kilometros = $kilometros;
        }
    }

    // Método para verificar si puede circular
    public function puedeCircular() {
        return $this->validarMatricula($this->matricula);
    }

    // Método para viajar
    public function viajar($kilometros) {
        if ($kilometros > 0 && $this->puedeCircular() && !$this->isAparcado()) {
            $this->kilometros += $kilometros;
        }
    }

    // Método toString
    public function toString() {
        $vehiculoInfo = parent::toString();
        return "$vehiculoInfo, Matrícula: $this->matricula, Kilómetros: $this->kilometros";
    }

    // Validación de matrícula
    private function validarMatricula($matricula) {
        if (!$matricula) {
            return false;
        }
        $patron = '/^\d{4} [B-DF-HJ-NP-TV-Z]{3}$/'; // 4 números, espacio, 3 letras válidas
        return preg_match($patron, $matricula) === 1;
    }
}

// Ejemplo de uso
function main() {
    // Vehículos generales
    $bicicleta = new Vehiculo("Orbea", "Rojo", 1);
    $camion = new Vehiculo("Volvo", "Blanco", 2);
    $patinete = new Vehiculo("Xiaomi", "Negro", 1);
    $moto = new Vehiculo("Yamaha", "Azul", 2);

    // Pruebas de métodos en Vehiculo
    $bicicleta->arrancar();
    echo $bicicleta->toString() . "\n";
    $bicicleta->aparcar();
    echo $bicicleta->toString() . "\n";

    // Coches
    $coche1 = new Coche("Toyota", "Blanco", 5, "1234 BBB", 1000);
    $coche2 = new Coche("Ford", "Negro", 5, "5678 FGH");
    $coche3 = new Coche("Tesla", "Rojo", 5, "9012 XYZ");

    // Pruebas de métodos en Coche
    echo $coche1->toString() . "\n";
    $coche1->arrancar();
    $coche1->viajar(200);
    echo $coche1->toString() . "\n";

    $coche2->setMatricula("0000 HHH");
    $coche2->arrancar();
    $coche2->viajar(150);
    echo $coche2->toString() . "\n";
}

main();

?>
