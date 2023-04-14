<?php
    require_once("./alumnos.php");

    use TestCrud\Alumno;

//RECUPERO TODOS LOS VALORES (POST)
    $accion = isset($_POST["accion"]) ? $_POST["accion"] : "sin accion";
    $legajo = isset($_POST["legajo"]) ? (int) $_POST["legajo"] : 0;
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "sin nombre";
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "sin apellido";

	if($accion == "listar" || $accion == "sin accion")
	{
		$accion = join('',$_GET);
	}
//****************************************** */
//CRUD - SOBRE ARCHIVOS
//****************************************** */

    switch($accion)
    {
	    case "agregar"://Create (Alta)
			$obj = new Alumno($legajo, $nombre, $apellido);
			if(Alumno::verificar($obj))
			{
				Alumno::agregar($obj);
				echo "<h2> alumno fue agregado con exito y su legajo es " . $obj->legajo . "</h2><br/>";	
			}
			else
			{
				echo "<h2> alumno no se ha podido agregar con el legajo" . $obj->legajo ."</h2><br/>";
			}
		break;

	    case "listar"://Read (listar)
			echo "<h2>Lista de alumnos<h2>";
			echo Alumno::listar() . "<br/>";
		break;

	    case "modificar"://Update (Modificar)
			$obj = new Alumno($legajo, $nombre, $apellido);
			if(Alumno::verificar($obj))
			{
				Alumno::modificar($obj);
				echo "<h2> alumno MODIFICADO </h2><br/>";			
			}
		else
			{
				echo "<h2> alumno no se ha podido modificar </h2><br/>";
			}
		break;

	    case "eliminar"://Delete (Borrar)
			if(Alumno::verificar($obj))
			{
				Alumno::borrar($legajo);
				echo "<h2> alumno BORRADO </h2><br/>";			
			}
			else
			{
				echo "<h2> alumno no se ha podido borrar </h2><br/>";
			}
		break;
				
	    default:
		echo "<h2> Sin ejemplo </h2>";
		break;
}
?>