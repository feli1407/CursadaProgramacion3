<?php
/*
Alumno: Casco Felipe
Ejercicio 10
*/
$lapiceras = array
(
    $lapiceras[0] = array("Color"=>"Rojo","Marca"=>"Bic","Trazo"=> "Fino","Precio"=>25),
    $lapiceras[1] = array("Color"=>"Azul","Marca"=>"OMG","Trazo"=> "Mediano","Precio"=>65),
    $lapiceras[2] = array("Color"=>"Verde","Marca"=>"Firestone","Trazo"=> "Grueso","Precio"=>30),
);

foreach ($lapiceras as $lapicera)
{
    echo "Lapicera color ", $lapicera["Color"]," - Marca: ", $lapicera["Marca"], "- Trazo: "
    , $lapicera["Trazo"],"- Precio: $", $lapicera["Precio"], "<br><br>";
}
?>