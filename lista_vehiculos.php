<?php
    require 'vehiculos.php';

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    
    <h1>Vehículos</h1>
    <button id="alta"><a href="alta_vehiculo.php">Alta vehículo</a></button>
    <button id="borra"><a href="eliminatodos.php">Eliminar todos</a></button>
    <button id="atras"><a href="../index.php">Volver</a></button>
    <br/>

    <br/>
    <table border="1" width='700px' style="text-align:center">
        <tr>
            <td>
                <p>Matricula</p>
            </td>
            <td>
                <p>Marca</p>
            </td>
            <td>
                <p>Modelo</p>
            </td>
            <td>
                <p>Color</p>
            </td>
            <td>
                <p>Revisado</p>
            </td>
            <td colspan='3'>
                <p>Operaciones</p>
            </td>
        </tr>
    
        <?php
            $vehiculos = $_SESSION['vehiculo'];

            foreach($vehiculos as $list) {
                echo "<tr>";
                echo "<td>". $list->get_matricula() ."</td>";
                echo "<td>". $list->get_marca() ."</td>";
                echo "<td>". $list->get_modelo() ."</td>";
                echo "<td>". $list->get_color() ."</td>";
                echo "<td>". $list->get_revisado() ."</td>";
                $matricula = $list->get_matricula();
                $revisado = $list->get_revisado();
                echo "<td width='70px'>
                        <form action='revisado.php' method='post'>
                            <input type='hidden' name='_revisado' value='$revisado'>
                            <input type='hidden' name='_matricula' value='$matricula'>
                            <input type='submit' value='Revisar'/>
                        </form>
                    </td>";
                echo "<td width='70px'>   
                            <form action='modifica_vehiculos.php' method='post'>
                                <input type='submit' value='Editar'/>
                                <input type='hidden' name='_matricula' value='$matricula'/>
                            </form>";
                echo "</td>";
                echo "<td width='70px'>
                            <form action='elimina_vehiculos.php' method='post'>
                                <input type='hidden' name='_matricula' value='$matricula'>
                                <input type='submit' value='Eliminar'/>
                             </form>
                    </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>