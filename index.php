<?php
    require 'vehiculos.php';
    session_start();

    if(!isset($_SESSION['vehiculo'])){
        $_SESSION['vehiculo'] = [];
        $nuevo_vehiculo = new Vehiculo('1234ABC', 'Seat', 'Leon', 'Blanco', 'S');
        array_push($_SESSION['vehiculo'], $nuevo_vehiculo);
        $nuevo_vehiculo = new Vehiculo('2345CCV', 'Ford', 'Fiesta', 'Rojo', 'N');
        array_push($_SESSION['vehiculo'], $nuevo_vehiculo);
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
</head>
<body>
    
    <h1>Taller</h1>
    <form action="lista_vehiculos.php" method="post">
        <input type="submit" value="Taller"/>
    </form>
</body>
</html>