<?php
// #FUNCIONES

// // Las funciones pueden recibir parámetros.
// function NombreFuncion($par_1, $par_2, $par_n) {

// // código

// }

// // Las funciones pueden retornar valores.
// function NombreFuncion() {
// return $valor;

// }

// // Los parámetros pueden tener valores por default.
// function NombreFuncion($par_1, $par_2 = "valor") {

// // código

// }

// #INCLUIR ARCHIVOS

// // Formas de usar include
// include "ruta_archivo.php";
// include_once "ruta_archivo.php";
// // Formas de usar require
// require "ruta_archivo.php";
// require_once "ruta_archivo.php";

#OBJETOS

#DECLARACION

class NombreClase
{

// Atributos (private - protected – public/var - static)
// [Modificadores] $nombreAtributo;
// Métodos (private - protected – public/var - static)
// [Modificadores] function NombreMetodo([parametros])
// { ... }

}

// class NombreClase
// {

// //Atributos.
// private $_attr1;
// protected $_attr2;
// //Constructor
// public function __construct() { // código }

// //Métodos.
// private function Func1($param) { //código }
// protected function Func2() { //código }
// public function Func3() { //código }

// }

#SINTAXIS

// //Creo el objeto.
// $nombreObj = new NombreClase();

//Métodos de instancia
// $nombreObj->Func3(); 

//Atributos de instancia.
// $nombreObj->attr3;

//Métodos de clase. 
// NombreClase::Func4(); 

//Atributos estáticos
// NombreClase::$attr4;




// class ClaseBase {

// public function __construct($id,$nombre){

// //Inicializar variables aquí
// if($this->validar($id)){
// $this->id=$id;
// $this->nombre=$nombre;

// }

// }
// public function validar($id){
// //realiza una validación

// }

// }

// #HERENCIA

// class ClaseBase {

// public function __construct(){

// //Inicializar variables aquí

// }

// }
// class ClaseDerivada extends ClaseBase {
// public function __construct(){
// parent::__construct();
// //Inicializar variables propias aquí

// }

// }

// #POLIMORFISMO

// class ClaseBase {

// public function Saludar(){
// return "Hola";

// }

// }
// class ClaseDerivada extends ClaseBase {

// public function Saludar(){

// return parent::Saludar()." "."mundo";

// }

// }

// #INTERFACES

// interface IInterfaz{

// function Metodo();

// }
// class Clase implements IInterfaz {
// public function Metodo(){
// //Implementación aquí

// }

// }

// #CLASE ABSTRACTA

// abstract class ClaseAbstracta {

// public abstract function Metodo();

// }
// class ClaseDerivada extends ClaseAbstracta {

// public function Metodo(){

// //Implementación aquí

// }

// }

// #CONSTRUCTORES

// class Coche {

// // Atributos
// public $marca;
// public $color;

// // Constructor con parámetros opcionales
// public function __construct($marca, $color = "") {

// $this->marca = $marca;
// $this->color = $color;

// }

// }
// $coche = new Coche("FIAT", "NEGRO");

// $coche = new Coche("FORD"); // Opcional 2do parámetro

?>