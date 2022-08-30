<?php
/*
Alumno: Casco Felipe
Ejercicio 13
*/
$palabraPrueba = "Parcial";

function validarPalabra($palabra, $max)
{
    if(strlen($palabra)<= $max)
    {
        if($palabra == "Recuperatorio" || $palabra == "Parcial" || $palabra == "Programacion")
        {
            return 1;
        }
    }
    return 0;
}

echo validarPalabra($palabraPrueba, 7);
echo validarPalabra($palabraPrueba, 10);
echo validarPalabra("Palabra", 7);

?>

