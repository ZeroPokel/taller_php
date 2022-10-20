<?php
    require 'vehiculos.php';

    session_start();

    $vehiculos = $_SESSION['vehiculo'];
    $matricula = $_POST['matricula'];
    $posicion = 0;
    $pos = $_POST['i'];

    foreach($vehiculos as $list) {

        if ($list->get_matricula() == $matricula){
            $revisado = $list->get_revisado();
        }

        $posicion++;
    }

    $nuevo_vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color'], $revisado);
    $vehiculos[$pos] = $nuevo_vehiculo;
    $_SESSION['vehiculo'] = $vehiculos;
    
    header('Location:lista_vehiculos.php');

?>