<?php
/*
Alumno: Casco Felipe
Ejercicio 5
*/
$valor = 25;
$decena = $valor/10;
$decena = (int)$decena;
$unidad = $valor - $decena * 10;
$numDecena[2]="veinte";
$numDecena[3]="treinta";
$numDecena[4]="cuartenta";
$numDecena[5]="cincuenta";
$numDecena[6]="sesenta"; 

$numUnidad[1]="uno";
$numUnidad[2]="dos";
$numUnidad[3]="tres";
$numUnidad[4]="cuatro";
$numUnidad[5]="cinco";
$numUnidad[6]="seis";
$numUnidad[7]="siete";
$numUnidad[8]="ocho";
$numUnidad[9]="nueve";

if ($valor >= 20 && $valor <= 60) {

    $salida = $numDecena[$decena];
    if($unidad != 0)
    {
        $salida .= " y ";
        $salida .= $numUnidad[$unidad];
    }

} else {
    $salida = "Numero fuera de rango";
}
echo "$salida ";
?>