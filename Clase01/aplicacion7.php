<?php
/*
Alumno: Casco Felipe
Ejercicio 7
*/
$numerosImpares = array();
$auxNum = 1;
$contador = 0;

while($contador < 10)
{
    if(($auxNum % 2) != 0)
    {
        $numerosImpares[$contador] = $auxNum;
        $contador++;
    }
    $auxNum++;
}

for($i=0 ; $i<10 ; $i++)
{
    echo $numerosImpares[$i] ."<br>";
}
?>