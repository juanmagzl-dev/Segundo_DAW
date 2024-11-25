// Cliente.php
<?php
class Cliente {
    private $nombre;
    private $producto;
    public $apodo;
    public static $clientela = 0;  // Contador de clientela

    public function __construct($nombre, $producto = "") {
        $this->nombre = $nombre;
        $this->producto = $producto;
        self::$clientela++;  // Incrementa la clientela
        echo "{$this->nombre} creado.\n";
    }

    public function eliminar() {
        self::$clientela--;  // Decrementa la clientela
    }

    public function comprar($prod) {
        $this->producto = $prod;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function mostrar() {
        echo "{$this->nombre} es conocido como {$this->apodo}.\n";
    }
}
?>
