<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>mi form</title>
    </head>
    <body style="background-color: grey">
        <h1>Tarea tp</h1>
        <h2>Nahuel Rodrigo Pazos</h2>
        <form action="./nexo.php" method="post">
        <h3>Opciones de accion:</h3>
        <h4>Agregar alumno = 1</h4>
        <h4>Listar alumnos = 2</h4>
        <h4>Modificar alumno = 3</h4>
        <h4>Eliminar alumno = 4</h4>
        <input type="text" name="accion" placeholder="accion">
        <br>
        <input type="text" name="nombre" placeholder="nombre">
        <br>
        <input type="text" name="apellido" placeholder="apellido">
        <br>
        <input type="number" name="legajo" placeholder="legajo">
        <br>
        <br>
        <input type="submit" value="Cargar" style="font-size: 15px; padding: 10px 15px">
        <br>
        </form>
    </body>
</html>