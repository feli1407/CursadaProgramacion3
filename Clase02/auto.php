<?php
/*
Alumno: Casco Felipe
Ejercicio 14
*/

class Auto
{
    private string $_color;
    private float $_precio;
    private string $_marca;
    private DateTime $_fecha;


    public function __construct(string $color, string $marca, float $precio = 0.0, dateTime $fecha = new DateTime()) 
    {
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_marca = $marca;
        $this->_fecha = $fecha; 
    }

    public function AgregarImpuestos($double)
    {
        $this->_precio += $double;
    }

    public static function MostrarAuto($auto)
    {
        $str = "Marca: $auto->_marca";
        $str.= "- Color: $auto->_color";
        $str.= "- Precio: $auto->_precio";
        $str.= "- Fecha: $auto->_fecha";
        
        echo "Datos del auto: $str<br>";
    }

}



?>