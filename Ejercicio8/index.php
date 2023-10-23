<?php
function esCorreoValido($correo) {
    /* Patron de expresion regular para verificar una direccion de correo electronico valida*/
    $patron = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    /* Verifica si la cadena cumple con el patron de correo electronico valido*/
    if (preg_match($patron, $correo)) {
        return true;
    } else {
        return false;
    }
}

/* Ejemplo de uso de la funcion*/
$correo1 = "pepeluchojlda@gamil.com";
$correo2 = "luis.gmail";
$correo3 = "josedavila@gamil.com";
$correo4 = "davila.gmail";
if (esCorreoValido($correo1)) {
    echo "$correo1: Es una direccion de correo electronico valida.<br>";
} else {
    echo "$correo1: No es una direccion de correo electronico valida.<br>";
}

if (esCorreoValido($correo2)) {
    echo "$correo2: Es una direccion de correo electronico valida.<br>";
} else {
    echo "$correo2: No es una direccion de correo electronico valida.<br>";
}
if (esCorreoValido($correo3)) {
    echo "$correo3: Es una direccion de correo electronico valida.<br>";
} else {
    echo "$correo3: No es una direccion de correo electronico valida.<br>";
}
if (esCorreoValido($correo4)) {
    echo "$correo4: Es una direccion de correo electronico valida.";
} else {
    echo "$correo4: No es una direccion de correo electronico valida.";
}
?>
