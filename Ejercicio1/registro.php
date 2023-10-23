<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    $usuario = "$nombre|$email|$contrasena\n";

    file_put_contents('usuarios.txt', $usuario, FILE_APPEND | LOCK_EX);
    echo "Usuario registrado correctamente.";
}
?>

<!-- Formulario de Registro -->
<form action="registro.php" method="post">
    Nombre: <input type="text" name="nombre" required><br>
    Email: <input type="email" name="email" required><br>
    Contraseña: <input type="password" name="contrasena" required><br>
    <input type="submit" value="Registrar">
</form>

