<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES);
    foreach ($usuarios as $usuario) {
        list($nombre, $email_guardado, $contrasena_guardada) = explode('|', $usuario);
        if ($email_guardado === $email && password_verify($contrasena, $contrasena_guardada)) {
            echo "Inicio de sesion exitoso. Bienvenido, $nombre!";
            exit();
        }
    }

    echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
}
?>

<!-- Formulario de Inicio de Sesion -->
<form action="login.php" method="post">
    Email: <input type="email" name="email" required><br>
    Contraseña: <input type="password" name="contrasena" required><br>
    <input type="submit" value="Iniciar Sesion">
</form>

<!-- Enlace para recuperar contraseña -->
<a href="recuperar_contrasena.php">¿Olvidaste tu contraseña?</a>

