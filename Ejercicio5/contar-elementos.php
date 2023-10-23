<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado del Conteo de datos</h1>
    <?php
    /* Obten la lista y el elemento a contar desde el formulario*/
    $lista = $_POST['lista'];
    $elemento = $_POST['elemento'];

    /* Convierte la lista en un array usando la coma como delimitador*/
    $elementos = explode(',', $lista);

    /* Inicializa el contador*/
    $contador = 0;

    /* Cuenta cuantas veces aparece el elemento en la lista*/
    foreach ($elementos as $item) {
        if (trim($item) == trim($elemento)) {
            $contador++;
        }
    }

    /* Muestra el resultado del conteo*/
    echo "El elemento '$elemento' aparece $contador veces en la lista.";
    ?>
</body>
</html>
