<?php
/*
Casco Felipe ejercicio 20
*/

class Auto{
    private $_marca;
    private $_color;
    private $_precio;
    private $_fecha;

    public function __construct($marca, $color, $precio = 500.00, $fecha = ""){
        if (is_string($marca)){
            $this->_marca = $marca;
        }
        if(is_string($color)){
            $this->_color = $color;
        }
        if (is_float($precio)){
            $this->_precio = $precio;
        }
        if (!empty($fecha) && date_parse($fecha) != false){
            $this->_fecha = $fecha;
        } else $this->_fecha = date("d-m-Y");
    }

    public function AgregarImpuesto($valueDouble){
        if(is_double($valueDouble)){
            $this->_precio += $valueDouble;
        }
    }

    public static function MostrarAuto($auto){
        if (is_a($auto, "Auto")){
            return "Vehiculo de marca " . $auto->_marca 
            . ", de color " . $auto->_color
            . ", de valor $" . $auto->_precio
            . ", fecha " . $auto->_fecha . "</br>";
        }
    }

    public function Equals($autoAComparar){
        return is_a($autoAComparar, "Auto") ? $this->_marca == $autoAComparar->_marca : false;
    }

    public static function Add($auto1, $auto2){
        return is_a($auto1, "Auto") && $auto1->Equals($auto2) && $auto1->_color == $auto2->_color ? $auto1->_precio + $auto2->_precio : 0; 
    }

    public function InfoAutoCSV(){
        return $this->_marca . ',' . $this->_color . ',' . strval($this->_precio) . ',' . strval($this->_fecha);
    }

    public static function AltaAuto($auto){
        $alta = false;
        $archivo = fopen("autos.csv", "a");
        if (is_a($auto, "Auto")){            
            $datos = fputcsv($archivo, get_object_vars($auto));
            if ($datos){
                $alta = true;
            }
        }
        fclose($archivo);
        return $alta;
    }

    public static function LecturaAuto(){
        try{
            $arrayDeVehiculos = array();
            if (file_exists("autos.csv")){
                $archivo = fopen("autos.csv", "r");
                while(!feof($archivo)){
                    $datos = fgetcsv($archivo, filesize("autos.csv"));
                    if ($datos != false && $datos != null){
                        array_push($arrayDeVehiculos, new self($datos[0],$datos[1],floatval($datos[2]),$datos[3]));
                    }
                }
                fclose($archivo);                
            }
        }catch(Exception $e){
        }finally{
            return $arrayDeVehiculos;
        }
    }
}
?>