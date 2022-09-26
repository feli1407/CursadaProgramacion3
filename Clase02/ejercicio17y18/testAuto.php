<?php
/*
Alumno: Casco Felipe
Ejercicio 17
*/
//Asi se incluyen archivos en PHP.(_once es para cuando se incluyen una sola vez)
// requiere_once "./auto.php";
include_once "./auto.php";
include_once "./garage.php";

$auto1 = new Auto("rojo", "audi");
//$auto2 = new Auto("azul", "audi");
$auto3 = new Auto("violeta", "bmw", 250000);
//$auto4 = new Auto("violeta", "bmw", 350000);
$auto5 = new Auto("verde", "ford", 180000, 2020);
$auto6 = new Auto("celeste", "VW", 216000, 2015);
$auto7 = new Auto("amarillo", "fiat", 95000, 2017);

$auto3->AgregarImpuesto(1500);
//$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuesto(1500);

// echo "<br>El importe de auto1 y auto2 es: " . Auto::Add($auto1, $auto2);

// echo "<br>El primer auto y el segundo son iguales: " . $auto1->Equals($auto2);
// echo "<br>El primer auto y el quinto son iguales: " . $auto1->Equals($auto5);

// Auto::MostrarAuto($auto1);
// Auto::MostrarAuto($auto3);
// Auto::MostrarAuto($auto5);

$arrayAutos = array();
array_push($arrayAutos, $auto1);
array_push($arrayAutos, $auto6);
array_push($arrayAutos, $auto3);
array_push($arrayAutos, $auto7);

Auto::AltaAuto($arrayAutos);

$garage = new Garage("Garage Casco", 350);
$garage->Add($auto1);
$garage->Add($auto6);
$garage->Add($auto3);
$garage->Add($auto7);
$garage->Add($auto5);

//$garage->MostrarGarage();

$arrayAutosLeido = array();
$arrayAutosLeido = Auto::LecturaAuto();
foreach($arrayAutosLeido as $auto)
{
    Auto::MostrarAuto($auto);
}
?>