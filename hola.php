<?php
// Autor: Manuel <mpaniagua@iestrassirra.com>
// El nombre por defecto es Mundo
// Añadimos un comentario
require('./lib/HolaMundo.php');

print "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);

?>

