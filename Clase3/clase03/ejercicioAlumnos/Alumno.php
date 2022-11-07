<?php
namespace TestCrud;

class Alumno{

	public int $legajo;
	public string $nombre;
	public string $apellido;
    public string $mail;

	public function __construct(int $legajo, string $nombre, string $apellido, string $mail)
	{
		$this->legajo = $legajo;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
        $this->mail = $mail;
	}

	public static function agregar(Alumno $obj) : bool {

		$retorno = false;

		//ABRO EL ARCHIVO
		$ar = fopen("./alumnos.txt", "a");//A - append

		//ESCRIBO EN EL ARCHIVO CON FORMATO: CLAVE-VALOR_UNO-VALOR_DOS
		$cant = fwrite($ar, "{$obj->legajo}-{$obj->nombre}-{$obj->apellido}-{$obj->mail}\r\n");

		if($cant > 0)
		{
			$retorno = true;			
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		return $retorno;
	}

	public static function listar() : string {

		$retorno = "";

		//ABRO EL ARCHIVO
		$ar = fopen("./alumnos.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$retorno .= fgets($ar);		
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		return $retorno;
	}

	public static function modificar(Alumno $obj) : bool {

		$retorno = false;

		$elementos = array();

		//ABRO EL ARCHIVO
		$ar = fopen("./alumnos.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$linea = fgets($ar);
			//http://www.w3schools.com/php/func_string_explode.asp
			$array_linea = explode("-", $linea);

			$array_linea[0] = trim($array_linea[0]);

			if($array_linea[0] != ""){
				//RECUPERO LOS CAMPOS
				$legajo_archivo = trim($array_linea[0]);
				$nombre_archivo = trim($array_linea[1]);
				$apellido_archivo = trim($array_linea[2]);
                $mail_archivo = trim($array_linea[3]);

				if ($legajo_archivo == $obj->legajo) {
					
					array_push($elementos, "{$legajo_archivo}-{$obj->nombre}-{$obj->apellido}-{$obj->mail}\r\n");
				}
				else{

					array_push($elementos, "{$legajo_archivo}-{$nombre_archivo}-{$apellido_archivo}-{$mail_archivo}\r\n");
				}
			}
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		//ABRO EL ARCHIVO
		$ar = fopen("./alumnos.txt", "w");

		$cant = 0;
		
		//ESCRIBO EN EL ARCHIVO
		foreach($elementos AS $item){

			$cant = fwrite($ar, $item);
		}

		if($cant > 0)
		{
			$retorno = true;			
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		return $retorno;
	}

	public static function borrar(int $legajo) : bool {

		$retorno = false;

		$elementos = array();

		//ABRO EL ARCHIVO
		$ar = fopen("./alumnos.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$linea = fgets($ar);
			//http://www.w3schools.com/php/func_string_explode.asp
			$array_linea = explode("-", $linea);

			$array_linea[0] = trim($array_linea[0]);

			if($array_linea[0] != ""){

				//RECUPERO LOS CAMPOS
				$legajo_archivo = trim($array_linea[0]);
				$nombre_archivo = trim($array_linea[1]);
				$apellido_archivo = trim($array_linea[2]);
                $mail_archivo = trim($array_linea[3]);

				if ($legajo_archivo == $legajo) {
					//al hacer el continue vuelve a iniciar el ciclo while sin agregar a la lista el objeto con el mismo legajo.
					continue;
				}

				array_push($elementos, "{$legajo_archivo}-{$nombre_archivo}-{$apellido_archivo}-{$mail_archivo}\r\n");
			}
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		$cant = 0;

		//ABRO EL ARCHIVO
		$ar = fopen("./alumnos.txt", "w");

		//ESCRIBO EN EL ARCHIVO
		foreach($elementos AS $item){

			$cant = fwrite($ar, $item);
		}

		if($cant > 0)
		{
			$retorno = true;			
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		return $retorno;
	}
}