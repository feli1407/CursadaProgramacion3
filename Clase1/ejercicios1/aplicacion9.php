<?php
/*
Alumno: Casco Felipe
Ejercicio 9
*/
$lapicera1 = array(
    'color' => 'rojo',
    'marca' => 'bic',
    'trazo' => 'fino',
    'precio' => '100');
$lapicera2 = array(
    'color' => 'verde',
    'marca' => 'pepe',
    'trazo' => 'fino',
    'precio' => '200');
$lapicera3 = array(
    'color' => 'negra',
    'marca' => 'pepito',
    'trazo' => 'fino',
    'precio' => '300');

$lapicera = [];

array_push($lapicera, $lapicera1, $lapicera2, $lapicera3);


var_dump($lapicera);
?>