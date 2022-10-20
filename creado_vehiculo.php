<?php
    require 'vehiculos.php';

    session_start();

    $vehiculos = $_SESSION['vehiculo'];
    $matricula = $_POST['matricula'];
    $posicion = 0;

    $nuevo_vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color'], "N",);
    array_push($_SESSION['vehiculo'], $nuevo_vehiculo);
    
    header('Location:lista_vehiculos.php');

?>