<?php
/*
Alumno: Casco Felipe
Ejercicio 17
*/
//Asi se incluyen archivos en PHP.(_once es para cuando se incluyen una sola vez)
// requiere_once "./auto.php";
include_once "./auto.php";
include_once "./garage.php";

$auto1 = new Auto("audi", "rojo");
//$auto2 = new Auto("azul", "audi");
$auto3 = new Auto("bmw","violeta", 250000);
//$auto4 = new Auto("violeta", "bmw", 350000);
$auto5 = new Auto("ford", "verde", 180000, 2020);
$auto6 = new Auto( "VW", "celeste", 216000, 2015);
$auto7 = new Auto( "fiat", "amarillo", 95000, 2017);

$auto3->AgregarImpuesto(1500);
//$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuesto(1500);

// echo "<br>El importe de auto1 y auto2 es: " . Auto::Add($auto1, $auto2);

// echo "<br>El primer auto y el segundo son iguales: " . $auto1->Equals($auto2);
// echo "<br>El primer auto y el quinto son iguales: " . $auto1->Equals($auto5);

// Auto::MostrarAuto($auto1);
// Auto::MostrarAuto($auto3);
// Auto::MostrarAuto($auto5);

Auto::AltaAuto($auto1);
Auto::AltaAuto($auto3);
Auto::AltaAuto($auto5);
Auto::AltaAuto($auto6);
Auto::AltaAuto($auto7);

$arrayAutosLeido = array();
$arrayAutosLeido = Auto::LecturaAuto();
foreach($arrayAutosLeido as $auto)
{
    echo Auto::MostrarAuto($auto);
}
?>