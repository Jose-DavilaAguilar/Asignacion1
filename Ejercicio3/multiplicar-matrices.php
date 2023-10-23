<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado de la Multiplicacion de Matrices</h1>
    <?php
    /*Obten las dimensiones de las matrices desde el formulario*/
    $filas1 = $_POST['filas1'];
    $columnas1 = $_POST['columnas1'];
    $filas2 = $_POST['filas2'];
    $columnas2 = $_POST['columnas2'];

    /*Verifica si las matrices son compatibles para la multiplicacion*/
    if ($columnas1 != $filas2) {
        echo "Las matrices no son compatibles para la multiplicacion.";
    } else {
        /*Crea las matrices y realiza la multiplicacion*/
        $matriz1 = []; /* Debes llenar esta matriz con los datos*/
        $matriz2 = []; /* Debes llenar esta matriz con los datos*/
        $resultado = [];

        /*Realiza la multiplicacion de matrices*/
        for ($i = 0; $i < $filas1; $i++) {
            for ($j = 0; $j < $columnas2; $j++) {
                $resultado[$i][$j] = 0;
                for ($k = 0; $k < $columnas1; $k++) {
                    $resultado[$i][$j] += $matriz1[$i][$k] * $matriz2[$k][$j];
                }
            }
        }

        /*Muestra el resultado*/
        echo "<h2>Matriz Resultante:</h2>";
        echo "<pre>";
        print_r($resultado);
        echo "</pre>";
    }
    ?>
</body>
</html>
