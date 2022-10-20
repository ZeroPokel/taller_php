<?php

    require 'vehiculos.php';
    session_start();
    $vehiculos = $_SESSION['vehiculo'];

    $matricula = $_POST['_matricula'];
    $revisado = $_POST['_revisado'];
    $posicion = 0;

    foreach($vehiculos as $list) {

        if ($list->get_matricula() == $matricula){
            $revisado = $list->get_revisado();

            if ($revisado == "N"){
                $list->set_revisado("S");
            } else {
                $list->set_revisado("N");
            }

            break;
        }
    
        $posicion++;
    }
    
    $_SESSION['vehiculo'] = $vehiculos;

    header('Location:lista_vehiculos.php');
?>