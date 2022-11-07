<?php
require_once("./Alumno.php");

use TestCrud\Alumno;

//RECUPERO TODOS LOS VALORES (POST)

if (isset($_POST["operacion"])) {
    $operacion = $_POST["operacion"] ? (int) $_POST["operacion"] : 0;
} elseif (isset($_GET["operacion"]) && $_GET["operacion"] == "listar") {
    $operacion = 2;
}

$legajo = isset($_POST["legajo"]) ? (int) $_POST["legajo"] : 0;
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : NULL;
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : NULL;
$mail = isset($_POST["mail"]) ? $_POST["mail"] : NULL;

//****************************************** */
//CRUD - SOBRE ARCHIVOS
//****************************************** */

switch ($operacion) {
    case 1: //Create (Alta)

        $obj = new Alumno($legajo, $nombre, $apellido, $mail);

        if (Alumno::agregar($obj)) {

            echo "<h2> Alumno ". $legajo . " AGREGADO correctamente!</h2><br/>";
        }

        break;

    case 2: //Read (listar)

        echo Alumno::listar();

        break;

    case 3: //Update (Modificar)

        $obj = new Alumno($legajo, $nombre, $apellido, $mail);

        if (Alumno::modificar($obj)) {
            echo "<h2> Alumno ". $legajo . " MODIFICADO correctamente!</h2><br/>";
        }

        break;

    case 4: //Delete (Borrar)

        if (Alumno::borrar($legajo)) {
            echo "<h2> Alumno ". $legajo . " BORRADO correctamente!</h2><br/>";
        }

        break;

    default:
        echo "<h2> Sin operacion valida. </h2>";
}
