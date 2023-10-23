<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    // Obten las longitudes ingresadas por el usuario
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    // Verifica el tipo de triangulo
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Pueden formar un triangulo equilatero.";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Pueden formar un triangulo isosceles.";
    } else {
        echo "Pueden formar un triangulo escaleno.";
    }
    ?>
</body>
</html>
