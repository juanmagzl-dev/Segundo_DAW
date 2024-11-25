// Libro.php
<?php
require_once 'iembalaje.php';
 // Asegúrate de incluir la interfaz

abstract class Libro extends Papel implements iembalaje {
    public $titulo;
    private $paginas;
    private $ancho;
    private $alto;
    private $dobleCara = true; // Fijo como verdadero
    
    public function __construct($alto, $largo, $paginas) {
        parent::__construct($alto, $largo, $dobleCara);
        $this->paginas = $paginas;
        $this->ancho = $paginas / 100;
        // Incrementar el número de páginas gastadas
        Papel::incrementarPaginasGastadas(1);
        echo "Libro de $paginas páginas creado.\n";
    }
    
    abstract public function calcularEspacio(); // Método abstracto

    public function embalar($unidades) {
        // Implementación del método embalar
        $margen = 2; // Ejemplo de margen
        $volumenEnvoltorio = ($this->alto + 2 * $margen) * ($this->ancho * $unidades + 2 * $margen) * ($this->alto + 2 * $margen);
        return $volumenEnvoltorio;
    }
    
    public function __toString() {
        return "Libro de {$this->paginas} páginas titulado {$this->titulo}.";
    }
}

?>
