<?php
/*
Casco Felipe ejercicio 20
*/

require_once "./auto.php";

class Garage{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos;

    public function __construct($razonSocial, $precioPorHora = 35.00){
        if (is_string($razonSocial)){
            $this->_razonSocial = $razonSocial;
        }
        if (is_double($precioPorHora)){
            $this->_precioPorHora = $precioPorHora;
        }
        $this->_autos = array();
    }

    public function Vehiculos(){
        return $this->_autos;
    }

    public function MostrarGarage(){
        $infoGarage = "Razón Social: " . $this->_razonSocial
        . "</br>Precio por hora: $" . $this->_precioPorHora. "</br>";
        if (count($this->_autos) > 0){
            $infoGarage .= "<b>Vehiculos dentro del garage:</b></br>";
            foreach($this->_autos as $v){
                $infoGarage .= Auto::MostrarAuto($v);
            }
        } else $infoGarage .= "Sin vehículos en el garage actualmente.</br>";
        return $infoGarage;
    }

    public function Equals($auto){
        return is_a($auto, "Auto") ? in_array($auto, $this->_autos) : false;
    }

    public function Add($auto){
        if (!$this->Equals($auto)){
            array_push($this->_autos, $auto);
            return "Se ha agregado el vehículo al garage.";
        } else return "El vehículo ya existe en el garage!";
    }

    public function Remove($auto){
        $resultado = "El vehiculo no existe en el garage para removerlo.";
        if(count($this->_autos) > 0){
            foreach($this->_autos as $v){
                if ($v->Equals($auto)){
                    array_splice($this->_autos, array_search($auto, $this->_autos), 1);
                    $resultado = "El vehiculo se ha removido del garage.";
                    break;
                }
            }
        }
        return $resultado;
    }

    private function InfoGarage(){
        $array = array();
        foreach($this->_autos as $vehiculo){
            array_push($array, $vehiculo->InfoAutoCSV());
        }
        return $this->_razonSocial . ',' . $this->_precioPorHora . '/' . implode('/', $array);
    }

    public static function AltaGarage($garage){
        $alta = false;
        $archivo = fopen("garage.csv", "a");
        if ($archivo && is_a($garage, "Garage")){
            $escritura = fwrite($archivo, $garage->InfoGarage() . PHP_EOL);
            if ($escritura != false && $escritura != null){
                $alta = true;
            }
        }
        fclose($archivo);
        return $alta;
    }
    /*
        Lectura de CSV de garage, lee una línea con datos de "garage" donde los vehículos contenidos
        están separados por "/".
        How works: Los datos previos a "/" son los datos pertenecientes al garage (índice 0), se hace un explode
        de esos datos (2 datos) y se lo utiliza para construir un objeto Garage. Los datos luego del "/"
        son datos de vehículos (índice 1 en adelante), se hace un explode para armar de cada índice un objeto
        Auto y luego incorporarlo al garage. Así por cada línea.
    */
    public static function Lectura(){
        try{
            $arrayDeGarages = array();
            $archivo = @fopen("garage.csv", "r");
            if ($archivo){
                while(!feof($archivo)){
                    $datos = fgetcsv($archivo, 0, "/");
                    if ($datos){
                        $garageAux = new Garage(explode(",", $datos[0])[0], floatval(explode(",", $datos[0])[1]));
                        for ($i = 1; $i < count($datos); $i++){
                            $vehiculo = explode(",", $datos[$i]);
                            $autoAux = new Auto($vehiculo[0], $vehiculo[1], floatval($vehiculo[2]), $vehiculo[3]);
                            $garageAux->Add($autoAux);
                        }
                        array_push($arrayDeGarages, $garageAux);
                    }
                }
            }
        } catch(Exception $e){
        } finally{
            @fclose($archivo);
            return $arrayDeGarages;
        }    
    }
}
?>