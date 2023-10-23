<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Busqueda</title>
</head>
<body>
    <h1>Resultado de Busqueda</h1>
    <?php
    /* Array de frutas*/
    $frutas = array("Sandia", "Platano", "Mango", "Granada", "Melon");

    /* Obten la fruta ingresada por el usuario*/
    $frutaBuscada = $_POST['fruta'];

    /* Verifica si la fruta esta en el array*/
    if (in_array($frutaBuscada, $frutas)) {
        echo "Si, tenemos $frutaBuscada ";
    } else {
        echo "Lo siento, no tenemos $frutaBuscada ";
    }
    ?>
</body>
</html>
