<?php

    require 'vehiculos.php';
    session_start();

    $vehiculos = $_SESSION['vehiculo'];
    $matricula = $_POST['_matricula'];
    $posicion = 0;

    foreach($vehiculos as $list) {

        if ($list->get_matricula() == $matricula){
            $marca = $list->get_marca();
            $modelo = $list->get_modelo();
            $color = $list->get_color();
            $revisado = $list->get_revisado();
            break;
        }

        $posicion++;
    }

    echo "<form method='post' action='edita_vehiculo.php'>
            <label>Matricula</label>
                <input type='text' name='matricula' required='true' value='$matricula' readonly>
            <br/>
            <label>Marca </label>
                <input type='text' name='marca' required='true' value='$marca'>
            <br/>
            <label>Modelo</label>
                <input type='text' name='modelo' required='true' value='$modelo'>
            <br/>
            <label>Color</label>
                <input type='text' name='color' required='true' value='$color'>
            <br/>
            <label>Revisado</label>
                <input type='text' name='revisado' required='true' value='$revisado' readonly>
            <br/>
            <input type='submit' value='Editar'>
            <input type='hidden' name='i' value='$posicion'/>
    </form>";

?>