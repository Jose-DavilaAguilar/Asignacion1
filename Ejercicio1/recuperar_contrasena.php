<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $_SESSION['mensaje'] = "Se ha enviado un correo electrónico con instrucciones para restablecer la contraseña.";
    header("Location: recuperar_contrasena.php");
    exit();
}
?>

<!-- Formulario para solicitar recuperación de contraseña -->
<form action="recuperar_contrasena.php" method="post">
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Recuperar Contraseña">
</form>
