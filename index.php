<?php
include 'conf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de ajedrez</title>
</head>
<style>
    .white {
        background-color: white;
    }
    .black {
        background-color: black;
    }
    td {
        border: 1px solid black;
        padding: 10px;
        width: 50px;
        height: 50px;
    }
    .coordenada {
        border: none;
        font-size: 20px;
        text-align: center;
    }
    img {
        width: 50px;
        height: 50px;
    }
</style>
<body>
    <h1>Tablero de Ajedrez</h1>
    <table>
        <?php
        //Filas
        echo "<tr>";
        echo '<td class="coordenada"></td>';
        foreach ($coordenadas as $coordenada) {
            echo '<td class="coordenada">', $coordenada,'</td>';
        }
        echo "</tr>";
        for ($i = 8; $i >= 1; $i--) {
            echo "<tr>";
            echo '<td class="coordenada">', $i,'</td>';
            //Columnas
            for ($j = 8; $j >= 1; $j--) {
                if (($j + $i) % 2 == 0) {
                    $color = 'white';
                } else {
                    $color = 'black';
                }
                $ficha = ''; // Colocando las fichas
                // Comprueba si la fila es mayor a 5 ya que la tabla se crea en orde descendente
                if ($color == 'black') {
                    if ($i > 5) {
                        $ficha = '<img src="ficha_negra.png">';
                    } elseif ($i < 4) {
                        $ficha = '<img src="ficha_roja.png">';
                    }
                }
                echo '<td class="', $color,'">', $ficha,'</td>';
            }
            echo '<td class="coordenada">', $i,'</td>';
            echo "</tr>";
        }
        echo '<td class="coordenada"></td>';
        foreach ($coordenadas as $coordenada) {
            echo '<td class="coordenada">', $coordenada,'</td>';
        }
        ?>
    </table>
</body>
</html>