// Fotocopia.php
<?php
require_once 'Papel.php';  
class Fotocopia extends Papel {
    private $color;

    public function __construct($alto, $largo, $color, $dobleCara = false) {
        parent::__construct($alto, $largo, $dobleCara);
        $this->color = $color;
        $this->paginasGastadas++;  // Incrementa páginas gastadas
    }

    public function calcularEspacio() {
        return $this->alto * $this->largo;  // Área de la fotocopia
    }

    public function __toString() {
        return parent::__toString() . " Color: {$this->color}, Doble cara: " . ($this->getDobleCara() ? "Sí" : "No");
    }

    public function __destruct() {
        $this->paginasRecicladas++;  // Incrementa páginas recicladas al eliminar fotocopia
    }
}
?>
