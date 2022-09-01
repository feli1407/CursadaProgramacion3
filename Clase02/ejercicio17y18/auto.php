<?php
/*
Alumno: Casco Felipe
Ejercicio 17
*/

class Auto
{
    private  $_color;
    private  $_precio;
    private  $_marca;
    private  $_fecha;


    public function __construct(string $color, string $marca, float $precio = 0.0, $fecha = "01/02/2001") 
    {
        if(gettype($marca) == "string" && gettype($color) == "string" && gettype($precio) == "double")
        {
            $this->_color = $color;
            $this->_precio = $precio;
            $this->_marca = $marca;
            $this->_fecha = $fecha; 
        }
    }

    public function AgregarImpuestos($double)
    {
        $this->_precio += $double;
    }

    public static function MostrarAuto($auto)
    {
        echo "<br>";
        $str = "Marca: $auto->_marca";
        $str.= " - Color: $auto->_color";
        $str.= " - Precio: $auto->_precio";
        $str.= " - Fecha: $auto->_fecha";
        
        echo "Datos del auto: $str<br>";
        //OTRA FORMA DE HACERLO
        // $atributos = "";
        // echo "DATOS DEL AUTO: <br/>";
        // foreach($auto as $atributoAuto)
        // {
        //     $atributos .= "<br/>".$atributoAuto;
        // }
        // echo $atributos;
    }

    public function Equals($auto)
    {
        if($auto->_marca == $this->_marca)
        {
            return true;
        }
        return false;
    }

    public static function Add($auto1, $auto2)
    {
        if($auto1->Equals($auto2) && $auto1->_color == $auto2->_color)
        {
            return $auto1->_precio + $auto2->_precio;
        }
        else
        {
            echo "La marca o el color de los autos no coinciden.";
            return 0;
        }
    }

}



?>