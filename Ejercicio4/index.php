<?php
session_start();

/* Inicializa la lista de contactos (almacenada en una sesion)*/
if (!isset($_SESSION['contactos'])) {
    $_SESSION['contactos'] = [];
}

/* Funcion para agregar un nuevo contacto*/
function agregarContacto($nombre, $telefono) {
    $_SESSION['contactos'][] = ['nombre' => $nombre, 'telefono' => $telefono];
}

/* Funcion para editar un contacto existente*/
function editarContacto($indice, $nombre, $telefono) {
    if (isset($_SESSION['contactos'][$indice])) {
        $_SESSION['contactos'][$indice] = ['nombre' => $nombre, 'telefono' => $telefono];
    }
}

/* Funcion para eliminar un contacto*/
function eliminarContacto($indice) {
    if (isset($_SESSION['contactos'][$indice])) {
        unset($_SESSION['contactos'][$indice]);
    }
}

/* Funcion para buscar un contacto por nombre*/
function buscarContacto($nombre) {
    $resultados = [];
    foreach ($_SESSION['contactos'] as $contacto) {
        if (strpos($contacto['nombre'], $nombre) !== false) {
            $resultados[] = $contacto;
        }
    }
    return $resultados;
}

/* Verificar si se enviaron datos del formulario*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    switch ($accion) {
        case 'Agregar':
            agregarContacto($nombre, $telefono);
            break;
        case 'Editar':
            $indice = $_POST['indice'];
            editarContacto($indice, $nombre, $telefono);
            break;
        case 'Eliminar':
            $indice = $_POST['indice'];
            eliminarContacto($indice);
            break;
        case 'Buscar':
            $resultados = buscarContacto($nombre);
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="telefono">Telefono:</label>
        <input type="tel" name="telefono" required><br>

        <!-- Acciones del usuario -->
        <input type="submit" name="accion" value="Agregar">
        <input type="submit" name="accion" value="Editar">
        <input type="submit" name="accion" value="Eliminar">
        <input type="submit" name="accion" value="Buscar">
    </form>
   <!-- Muestra Resultados de Busqueda:-->
    <?php if (isset($resultados)): ?>
        <h2>Resultados de la Busqueda:</h2>
        <?php if (empty($resultados)): ?>
            <p>No se encontraron resultados.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($resultados as $contacto): ?>
                    <li><?php echo $contacto['nombre'] . ', ' . $contacto['telefono']; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
<!-- Listado de Contactos:-->
    <h2>Listado de Contactos:</h2>
    <ul>
        <?php foreach ($_SESSION['contactos'] as $indice => $contacto): ?>
            <li>
                <?php echo $contacto['nombre'] . ', ' . $contacto['telefono']; ?>
                <input type="hidden" name="indice" value="<?php echo $indice; ?>">
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
