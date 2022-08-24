<?php
/*
Alumno: Casco Felipe
Ejercicio 4
*/
$operador = array('+', '-', '*', '/');
$op1 = 20;
$op2 = 10;

switch($operador[3])
{
    case '+':
        echo "La suma de ambos numeros es: " . ($op1 + $op2);
        break;
    case '-':
        echo "La resta de num1 menos num2 es: " . ($op1 - $op2);
        break;
    case '*':
        echo "La multiplicacion de los numeros es: " . ($op1 * $op2);
        break;
    case '/':
        echo "La division de num1 sobre num2 es: " . ($op1 / $op2);
        break;
}
?>