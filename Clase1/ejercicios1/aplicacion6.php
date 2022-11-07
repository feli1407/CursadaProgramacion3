<?php
/*
Alumno: Casco Felipe
Ejercicio 6
*/
$numeros = array(rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10));
$promedio = ($numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4]) / 5;

if($promedio > 6)
{
    echo "El promedio de los numeros es " . $promedio . ", y es mayor a 6.";
}
elseif($promedio == 6)
{
    echo "El promedio de los numeros es " . $promedio . ", y es igual a 6.";
}
else
{
    echo "El promedio de los numeros es " . $promedio . ", y es menor a 6.";
}


?>