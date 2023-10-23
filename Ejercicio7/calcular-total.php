<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Carrito de Compras</title>
</head>
<body>
    <h1>Resultado del Carrito de Compras</h1>
    <?php
    /* Obten los datos de los productos desde el formulario*/
    $producto1 = $_POST['producto1'];
    $precio1 = $_POST['precio1'];
    $cantidad1 = $_POST['cantidad1'];

    $producto2 = $_POST['producto2'];
    $precio2 = $_POST['precio2'];
    $cantidad2 = $_POST['cantidad2'];

    /* Calcula el total gastado en el carrito de compras*/
    $total1 = $precio1 * $cantidad1;
    $total2 = $precio2 * $cantidad2;
    $totalGastado = $total1 + $total2;

    /* Muestra los detalles del carrito y el total gastado*/
    echo "<h2>Detalles de las compras:</h2>";
    echo "Producto 1: $producto1, Precio: $precio1, Cantidad: $cantidad1, Total: $total1<br>";
    echo "Producto 2: $producto2, Precio: $precio2, Cantidad: $cantidad2, Total: $total2<br>";
    echo "<h2>Total Gastado:</h2>";
    echo "Total Gastado: $totalGastado";
    ?>
</body>
</html>
