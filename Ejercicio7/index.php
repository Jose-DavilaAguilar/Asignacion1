<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <form action="calcular-total.php" method="post">
        <label for="producto1">Producto 1:</label>
        <input type="text" name="producto1" required>
        <label for="precio1">Precio:</label>
        <input type="number" name="precio1" required>
        <label for="cantidad1">Cantidad:</label>
        <input type="number" name="cantidad1" required><br>

        <label for="producto2">Producto 2:</label>
        <input type="text" name="producto2" required>
        <label for="precio2">Precio:</label>
        <input type="number" name="precio2" required>
        <label for="cantidad2">Cantidad:</label>
        <input type="number" name="cantidad2" required><br>

        <button type="submit">Calcular Total</button>
    </form>
</body>
</html>
