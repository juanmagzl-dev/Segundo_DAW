<?php
// Vehiculo.php
class Vehiculo {
    private $marca;
    private $color;
    private $plazas;
    private $aparcado;

    public function __construct($marca = "", $color = "", $plazas = 0) {
        $this->marca = $marca;
        $this->color = $color;
        $this->setPlazas($plazas);
        $this->aparcado = true; // Por defecto está aparcado
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getPlazas() {
        return $this->plazas;
    }

    public function setPlazas($plazas) {
        if (is_int($plazas) && $plazas > 0) {
            $this->plazas = $plazas;
        } else {
            throw new Exception("El número de plazas debe ser un entero positivo.");
        }
    }

    public function aparcar() {
        $this->aparcado = true;
    }

    public function arrancar() {
        $this->aparcado = false;
    }

    public function isAparcado() {
        return $this->aparcado;
    }

    public function __toString() {
        return "Marca: $this->marca, Color: $this->color, Plazas: $this->plazas, Aparcado: " . ($this->aparcado ? "Sí" : "No");
    }
}
?>
