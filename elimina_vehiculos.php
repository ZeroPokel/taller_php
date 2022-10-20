<?php

    require 'vehiculos.php';
    session_start();

    $vehiculos = $_SESSION['vehiculo'];
    $matricula = $_POST['_matricula'];
    $posicion = 0;

    foreach($vehiculos as $list) {

        if ($list->get_matricula() == $matricula){
            array_splice($vehiculos, $posicion, 1);
            break;
        }

        $posicion++;
    }

    $_SESSION['vehiculo'] = $vehiculos;

    header('Location:lista_vehiculos.php');

?>