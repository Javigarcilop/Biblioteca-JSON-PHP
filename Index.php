<?php
include 'Variante.php';
include 'Libro.php';
include 'Categoria.php';
include 'Biblioteca.php';


$biblioteca = new Biblioteca();
$ficcion = new Categoria("Ficción");
$noFiccion = new Categoria("No Ficción");
$ciencia = new Categoria("Ciencia");

$cienAnos = new Libro("Cien años de soledad", "Gabriel García Márquez", 15);
$cienAnos->agregarVariante(new Variante("Tapa dura", 20));
$cienAnos->agregarVariante(new Variante("Tapa blanda", 15));

$noventaYCuatro = new Libro("1984", "George Orwell", 12);
$noventaYCuatro->agregarVariante(new Variante("Tapa dura", 18));
$noventaYCuatro->agregarVariante(new Variante("Tapa blanda", 12));

$ficcion->agregarLibro($cienAnos);
$ficcion->agregarLibro($noventaYCuatro);

$steveJobs = new Libro("Steve Jobs", "Walter Isaacson", 18);
$steveJobs->agregarVariante(new Variante("Tapa dura", 25));
$steveJobs->agregarVariante(new Variante("Tapa blanda", 18));

$diarioAnaFrank = new Libro("El diario de Ana Frank", "Ana Frank", 10);
$diarioAnaFrank->agregarVariante(new Variante("Tapa dura", 15));
$diarioAnaFrank->agregarVariante(new Variante("Tapa blanda", 10));

$noFiccion->agregarLibro($steveJobs);
$noFiccion->agregarLibro($diarioAnaFrank);

$brevesRespuestas = new Libro("Breves respuestas a las grandes preguntas", "Stephen Hawking", 18);
$brevesRespuestas->agregarVariante(new Variante("Tapa dura", 25));
$brevesRespuestas->agregarVariante(new Variante("Tapa blanda", 18));

$elGen = new Libro("El gen", "Siddhartha Mukherjee", 22);
$elGen->agregarVariante(new Variante("Tapa dura", 30));
$elGen->agregarVariante(new Variante("Tapa blanda", 22));

$ciencia->agregarLibro($brevesRespuestas);
$ciencia->agregarLibro($elGen);

$biblioteca->agregarCategoria($ficcion);
$biblioteca->agregarCategoria($noFiccion);
$biblioteca->agregarCategoria($ciencia);

echo json_encode(['biblioteca' => $biblioteca], JSON_PRETTY_PRINT);
?>


