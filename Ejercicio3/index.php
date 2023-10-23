<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar Matrices</title>
</head>
<body>
    <h1>Multiplicar Matrices</h1>
    <form action="multiplicar-matrices.php" method="post">
        <label for="filas1">Numero de filas (Matriz 1):</label>
        <input type="number" name="filas1" required><br>
        <label for="columnas1">Numero de columnas (Matriz 1):</label>
        <input type="number" name="columnas1" required><br>

        <label for="filas2">Numero de filas (Matriz 2):</label>
        <input type="number" name="filas2" required><br>
        <label for="columnas2">Numero de columnas (Matriz 2):</label>
        <input type="number" name="columnas2" required><br>

        <button type="submit">Multiplicar</button>
    </form>
</body>
</html>
