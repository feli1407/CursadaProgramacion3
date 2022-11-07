<?php
/*
Alumno: Casco Felipe
Ejercicio 2
*/
$fechaHoy = date("F j, g:i a");//August 23, 3:07 am
echo $fechaHoy."<br>";
$fechaHoy = date("j, n, Y");//23, 8, 2022
echo $fechaHoy ."<br>";
$fechaHoy = date("D M j G:i:s T Y");//Tue Aug 23 3:07:40 CEST 2022
echo $fechaHoy."<br>";

$fecha = date("m-d-Y h:i:s a");
echo nl2br("fecha actual: $fecha \n");

$mes = (int)date("m");
$dia = (int)date("d");

if($mes <=2 || ($mes == 3 && $dia<20)) 
{
 echo "Es verano";
}
else if(($mes <=5)|| ($mes == 6 && $dia<20)) 
{
 echo "Es otoño";
}
else if($mes <=8 || ($mes == 9 && $dia<22)) 
{
    echo "Es Primavera";
}
else if($mes <=11 || ($mes == 12 && $dia<20)) 
{
    echo "Es Invierno";
}
else
{
    echo "Es verano";
}

?>