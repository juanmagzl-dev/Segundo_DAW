// Papel.php
<?php
abstract class Papel {
    protected $alto;
    protected $largo;
    private $dobleCara;
    protected $paginasGastadas = 0;
    protected $paginasRecicladas = 0;

    public function __construct($alto, $largo, $dobleCara = false) {
        $this->alto = $alto;
        $this->largo = $largo;
        $this->dobleCara = $dobleCara;
    }

    public function getDobleCara() {
        return $this->dobleCara;
    }

    abstract public function calcularEspacio();

    public function __toString() {
        return "Se usa un papel de tamaño: {$this->alto} x {$this->largo}.";
    }
}
?>
