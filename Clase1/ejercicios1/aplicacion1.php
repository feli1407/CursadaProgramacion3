<?php
/*
Alumno: Casco Felipe
Ejercicio 1
*/
$num = 0;
$auxNum = 0;

do{
if( $num < 1000)
{
    echo $num;
    echo "<br>";
}
$auxNum++;
$num += $auxNum;
}while($num<1000);

echo "Se sumaron en total $auxNum numeros";
?>