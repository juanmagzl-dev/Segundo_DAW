<?php
require_once 'Entregable.php';
class Serie implements entregable {
    private $titulo;
    private $numeroTemporadas;
    private $entregado;
    private $genero;

    public function __construct($titulo, $numeroTemporadas, $genero) {
        $this->titulo = $titulo;
        $this->numeroTemporadas = $numeroTemporadas;
        $this->genero = $genero;
        $this->entregado = false;
    }

    // Métodos getter
    public function getTitulo() {
        return $this->titulo;
    }

    public function getNumeroTemporadas() {
        return $this->numeroTemporadas;
    }

    public function getGenero() {
        return $this->genero;
    }

    // Métodos setter
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setNumeroTemporadas($numeroTemporadas) {
        $this->numeroTemporadas = $numeroTemporadas;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    // Método toString
    public function __toString() {
        return "Serie: {$this->titulo}, Temporadas: {$this->numeroTemporadas}, Género: {$this->genero}, Entregado: " . ($this->entregado ? "Sí" : "No");
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
