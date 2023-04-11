<?php
    require_once("./alumnos.php");

    use TestCrud\Elemento;

//RECUPERO TODOS LOS VALORES (POST)
    $accion = isset($_POST["accion"]) ? (int) $_POST["accion"] : "sin accion";
    $legajo = isset($_POST["legajo"]) ? (int) $_POST["legajo"] : 0;
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "sin nombre";
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "sin apellido";

//****************************************** */
//CRUD - SOBRE ARCHIVOS
//****************************************** */

    switch($accion)
    {
	    case 1://Create (Alta)

		$obj = new Elemento($legajo, $nombre, $apellido);

		if(Elemento::agregar($obj))
		{

			echo "<h2> alumno AGREGADO </h2><br/>";	
		}

		break;

	    case 2://Read (listar)

		echo Elemento::listar();

		break;

	    case 3://Update (Modificar)

		$obj = new Elemento($legajo, $nombre, $apellido);

		if(Elemento::modificar($obj))
		{
			echo "<h2> alumno MODIFICADO </h2><br/>";			
		}

		break;

	    case 4://Delete (Borrar)

		if(Elemento::borrar($legajo))
		{
			echo "<h2> alumno BORRADO </h2><br/>";			
		}

		break;
				
	    default:
		echo "<h2> Sin ejemplo </h2>";
		break;
}
?>