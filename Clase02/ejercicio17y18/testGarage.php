<?php
/*
Casco Felipe ejercicio 20
*/
require_once "./garage.phpgarage.php";

$auto1 = new Auto("RENAULT", "VERDE OSCURO", 4000.00, '19-3-1967');
$auto2 = new Auto("FIAT", "AZUL");
$auto3 = new Auto("FIAT", "NEGRO");
$auto4 = new Auto("RENAULT", "GRIS", 2769.99);
$auto5 = new Auto("RENAULT", "ROJO", 2000.99, '12-05-1998');
$auto6 = new Auto("LAMBORGHINI", "NEGRO", 37000.99, "22-1-1996");
$auto7 = new Auto("CITROEN", "CYAN", 3000.00);
$auto8 = new Auto("FORD", "BORDO", 749.45, '15-03-1977');

$garage1 = new Garage('Gas Monkey', 77.29);
$garage2 = new Garage('Diesel Dave', 84.15);

$arrayDeAutos = array($auto1, $auto2, $auto3, $auto4);
$arrayDeAutos2 = array($auto5, $auto6, $auto7, $auto8);

foreach($arrayDeAutos as $auto){
    $garage1->Add($auto);
}
foreach($arrayDeAutos2 as $auto){
    $garage2->Add($auto);
}

$arrayDeGarages = Garage::Lectura();
if (count($arrayDeGarages) <= 0){
    if (Garage::AltaGarage($garage1)){ 
        echo "Se ha dado de alta el garage correctamente y se guardó en garage.csv <br/>";
    }
    if (Garage::AltaGarage($garage2)){
        echo "Se ha dado de alta el garage correctamente y se guardó en garage.csv <br/>";
    }
}
$arrayDeGarages = Garage::Lectura();
foreach($arrayDeGarages as $garage){
    echo '<br/>', $garage->MostrarGarage();
}
?>