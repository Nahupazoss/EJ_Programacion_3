<?php
namespace TestCrud;

class Elemento
{

	public int $legajo;
	public string $nombre;
	public string $apellido;

	public function __construct(int $legajo, string $nombre, string $apellido)
	{
		$this->legajo = $legajo;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	public static function agregar(Elemento $obj) : bool 
    {

		$retorno = false;

		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "a");//A - append

		//ESCRIBO EN EL ARCHIVO CON FORMATO: CLAVE-VALOR_UNO-VALOR_DOS
		$cant = fwrite($ar, "{$obj->legajo}-{$obj->nombre}-{$obj->apellido}\r\n");

		if($cant > 0)
		{
			$retorno = true;			
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		return $retorno;
	}

	public static function listar() : string 
    {

		$retorno = "";

		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$retorno .= fgets($ar);		
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		return $retorno;
	}

	public static function modificar(Elemento $obj) : bool 
    {

		$retorno = false;

		$elementos = array();

		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$linea = fgets($ar);
			//http://www.w3schools.com/php/func_string_explode.asp
			$array_linea = explode("-", $linea);

			$array_linea[0] = trim($array_linea[0]);

			if($array_linea[0] != ""){
				//RECUPERO LOS CAMPOS
				$legajo = trim($array_linea[0]);
				$nombre = trim($array_linea[1]);
				$apellido = trim($array_linea[2]);

				if ($legajo == $obj->legajo) 
                {
					
					array_push($elementos, "{$legajo}-{$obj->nombre}-{$obj->apellido}\r\n");
				}
				else
                {

					array_push($elementos, "{$legajo}-{$nombre}-{$apellido}\r\n");
				}
			}
		}

		//CIERRO EL ARCHIVO
		fclose($ar);

		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "w");

		$cant = 0;
		
		//ESCRIBO EN EL ARCHIVO
		foreach($elementos AS $item)
        {

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

	public static function borrar(int $legajo) : bool 
    {

		$retorno = false;

		$elementos = array();

		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$linea = fgets($ar);
			//http://www.w3schools.com/php/func_string_explode.asp
			$array_linea = explode("-", $linea);

			$array_linea[0] = trim($array_linea[0]);

			if($array_linea[0] != "")
            {

				//RECUPERO LOS CAMPOS
				$legajo = trim($array_linea[0]);
				$nombre = trim($array_linea[1]);
				$apellido = trim($array_linea[2]);

				if ($legajo == $legajo) 
                {	
					continue;
				}

				array_push($elementos, "{$legajo}-{$nombre}-{$apellido}\r\n");
			}
		}
		//CIERRO EL ARCHIVO
		fclose($ar);
		$cant = 0;
		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "w");
		//ESCRIBO EN EL ARCHIVO
		foreach($elementos AS $item)
        {

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
?>