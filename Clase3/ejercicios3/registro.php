<?php
/*
Alumno: Casco Felipe
Ejercicio 20 Registro CSV
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
*/
//El POST se hace en el body - form data
include_once "./usuario.php"; 

$nombre = $_POST['nombre'];
$clave =$_POST['clave'];
$mail =$_POST['mail'];
$usuario1 = new Usuario($nombre, $clave, $mail);
if(Usuario::AltaUsuario($usuario1))
{
    echo "Se pudo cargar el usuario correctamente";
}


?>