<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta vehiculos</title>
</head>
<body>
    <form method="post" action="creado_vehiculo.php">
        <label>Matricula</label>
        <input type="text" name="matricula" required="true">
        <br/>
        <label>Marca </label>
        <input type="text" name="marca"required="true">
        <br/>
        <label>Modelo</label>
        <input type="text" name="modelo" required="true">
        <br/>
        <label>Color </label>
        <input type="text" name="color" required="true">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>