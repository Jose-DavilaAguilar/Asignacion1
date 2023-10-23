<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Triangulo</title>
</head>
<body>
<!-- Estructura HTML del Formulario. -->
    <h1>Verificar Triangulo</h1>
    <form action="verificar-triangulo.php" method="post">
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" required><br>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" required><br>
        <label for="lado3">Lado 3:</label>
        <input type="number" name="lado3" required><br>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
