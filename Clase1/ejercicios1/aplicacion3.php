<?php
/*
Alumno: Casco Felipe
Ejercicio 3
*/
$a = 10; 
$b = 17; 
$c = 15;

if($a == $b || $a == $c || $b == $c)
{
    echo "No hay numero del medio";
}
if($a > $b && $a > $c)
{
    if($b > $c)
    {
        echo "El numero del medio es " . $b;
    }
    if($c > $b)
    {
        echo "El numero del medio es " . $c;
    }
}
else if($b > $c)
{
    if($a > $c)
    {
        echo "El numero del medio es " . $a;
    }
    if($c > $a)
    {
        echo "El numero del medio es " . $c;
    }
}
else
{
    if($a > $b)
    {
        echo "El numero del medio es " . $a;
    }
    if($b > $a)
    {
        echo "El numero del medio es " . $b;
    }
}


?>