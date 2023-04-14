<?php
    require_once("./alumnos.php");

    use TestCrud\Alumno;

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

	    case 2://Read (listar)
			echo Alumno::listar();
		break;

	    case 3://Update (Modificar)
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

	    case 4://Delete (Borrar)
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