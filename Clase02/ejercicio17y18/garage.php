<?php
/*
Alumno: Casco Felipe
Ejercicio 18
*/
include_once "./auto.php";
class Garage
{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos;


    public function __construct($razonSocial, $precioPorHora = 0)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos = array();
    }

    public function MostrarGarage()
    {
        echo "<br>Razon Social: " . $this->_razonSocial . "<br>Precio por Hora: " . $this->_precioPorHora . "<br>";
        foreach($this->_autos as $auto)
        {
            Auto::MostrarAuto($auto);
        }
    }

    public function Equals(Auto $autoPasado)
   {
      $alojado = "";
      foreach ($this->_autos as $clave => $auto) {
         if ($auto->Equals($autoPasado, $auto)) {
            $alojado = [$clave, true];
            break;
         } else {
            $alojado = false;
         }
      }
      return $alojado;
   }

   public function Add(Auto $autoPasado)
   {
      if (!$this->Equals($autoPasado)) {
         array_push($this->_autos, $autoPasado);
         return true;
      } else {
         return false;
      }
   }


   public function Remove(Auto $autoPasado)
   {
      $siEstaEIndice = $this->Equals($autoPasado);
      if ($siEstaEIndice) {
         array_splice($this->_autos, $siEstaEIndice[1]);
         return "Se eliminó el auto.<br><br>";
      } else {
         return "El auto no se encuentra en el garage.<br><br>";
      }
   }
}


?>