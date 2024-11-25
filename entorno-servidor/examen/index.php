// index.php
<?php
require_once 'Cliente.php';
require_once 'Fotocopia.php';
require_once 'Papel.php';
require_once 'Libro.php';
require_once 'iembalaje.php';

echo "Crear cliente Pepe:\n";
$cliente1 = new Cliente("Pepe");
$cliente1->mostrar();

echo "\nCrear fotocopia a doble cara de 10x20:\n";
$fotocopia = new Fotocopia(10, 20, "Negro", true);
echo $fotocopia . "\n";

echo "\nCalculando espacio de la fotocopia:\n";
echo "Superficie: " . $fotocopia->calcularEspacio() . " cm²\n";

echo "\nPepe compra la fotocopia:\n";
$cliente1->comprar("Fotocopia a doble cara");

echo "\nMostrando datos de la fotocopia:\n";
echo "Producto de Pepe: " . $cliente1->getProducto() . "\n";

echo "\nPáginas gastadas: " . $fotocopia->paginasGastadas . "\n";
echo "Páginas recicladas: " . $fotocopia->paginasRecicladas . "\n";

echo "\nCliente total: " . Cliente::$clientela . "\n";

echo "\nEliminando cliente Pepe:\n";
$cliente1->eliminar();

echo "\nEliminando fotocopia:\n";
unset($fotocopia);

echo "\nPáginas gastadas después de eliminar la fotocopia: " . $fotocopia->paginasGastadas . "\n";
echo "Páginas recicladas después de eliminar la fotocopia: " . $fotocopia->paginasRecicladas . "\n";
echo "Cliente total después de eliminar Pepe: " . Cliente::$clientela . "\n";

echo "\nCrear libro de 12x25 y 200 páginas:\n";
$libro = new Libro(12, 25, 200, "PHP para Todos");

echo "\nEmbalando 2 unidades del libro:\n";
$volumenEnvoltorio = $libro->embalar(2);
echo "Volumen del embalaje: {$volumenEnvoltorio} cm³\n";

echo "\nCliente Juan compra el libro:\n";
$cliente2 = new Cliente("Juan", "PHP para Todos");
$cliente2->mostrar();

echo "\nPáginas gastadas del libro: " . $libro->paginasGastadas . "\n";
echo "Páginas recicladas del libro: " . $libro->paginasRecicladas . "\n";
echo "Cliente total: " . Cliente::$clientela . "\n";
?>
