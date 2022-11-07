<?php
/*
Alumno: Casco Felipe
Ejercicio 12
*/

$palabra = array('H', 'O', 'L', 'A');

function invertirPalabra($palabra)
{
    $tamanio = count($palabra);
    $palabraInvertida = array();
    for($i=$tamanio-1; $i>=0; $i--)
    {
        array_push($palabraInvertida, $palabra[$i]);
    }
    return $palabraInvertida;
}

var_dump(invertirPalabra($palabra));
?>