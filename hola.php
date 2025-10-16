<?php
// Autor: Manuel <mpaniagua@iestrassirra.com>
// El nombre por defecto es Mundo
// Añadimos un comentario
$nombre = isset($argv[1])? $argv[1]: "Mundo";
@print "Hola {$nombre}.";
?>

