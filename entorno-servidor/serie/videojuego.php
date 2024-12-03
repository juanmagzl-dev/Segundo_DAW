<?php
require_once 'Entregable.php';
class Videojuego implements entregable {
    private $titulo;
    private $horasEstimadas;
    private $entregado;
    private $genero;

    public function __construct($titulo, $horasEstimadas, $genero) {
        $this->titulo = $titulo;
        $this->horasEstimadas = $horasEstimadas;
        $this->genero = $genero;
        $this->entregado = false;
    }

    // Métodos getter
    public function getTitulo() {
        return $this->titulo;
    }

    public function getHorasEstimadas() {
        return $this->horasEstimadas;
    }

    public function getGenero() {
        return $this->genero;
    }

    // Métodos setter
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setHorasEstimadas($horasEstimadas) {
        $this->horasEstimadas = $horasEstimadas;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    // Método toString
    public function __toString() {
        return "Videojuego: {$this->titulo}, Horas Estimadas: {$this->horasEstimadas}, Género: {$this->genero}, Entregado: " . ($this->entregado ? "Sí" : "No");
    }

    // Métodos de la interfaz Entregable
    public function entregar() {
        $this->entregado = true;
    }

    public function devolver() {
        $this->entregado = false;
    }

    public function isEntregado() {
        return $this->entregado;
    }
}

?>
