<?php

    require 'vehiculos.php';
    session_start();

    $cantidad = 0;
    $posicion = 0;
    $vehiculos = $_SESSION['vehiculo'];

    foreach($vehiculos as $list) {
        $cantidad++;
    }

    foreach($vehiculos as $list) {
        array_splice($vehiculos, $posicion, $cantidad);
        $posicion++;
    }

    $_SESSION['vehiculo'] = $vehiculos;

    header('Location:lista_vehiculos.php');

?>