<?php

class CuentaBancaria {
    private $saldo;
/*Constructor de la clase. Inicializa el saldo inicial de la cuenta. */
    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }
/*Metodo para depositar dinero en la cuenta */
    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            return "Deposito de $monto realizado correctamente.";
        } else {
            return "El monto del deposito debe ser mayor que cero.";
        }
    }
/*Metodo para retirar dinero en la cuenta */
    public function retirar($monto) {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            return "Retiro de $monto realizado correctamente.";
        } else {
            return "Saldo insuficiente o monto inválido para el retiro.";
        }
    }
/*Metodo para consultar dinero en la cuenta */
    public function consultarSaldo() {
        return "Saldo actual: $" . $this->saldo;
    }
}

/* Verificar si se enviaron datos del formulario*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $saldoInicial = $_POST["saldo_inicial"];
    $monto = $_POST["monto"];
    $operacion = $_POST["operacion"];

    $cuenta = new CuentaBancaria($saldoInicial);

    $mensaje = "";
    if ($operacion == "depositar") {
        $mensaje = $cuenta->depositar($monto);
    } elseif ($operacion == "retirar") {
        $mensaje = $cuenta->retirar($monto);
    } elseif ($operacion == "consultar") {
        $mensaje = $cuenta->consultarSaldo();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Bancaria</title>
</head>
<body>
    <!-- Formulario para interactuar con la cuenta bancaria -->
    <h1>Cuenta Bancaria</h1>
    <form method="post" action="">
        <label for="saldo_inicial">Saldo Inicial:</label>
        <input type="number" name="saldo_inicial" required><br>

        <label for="monto">Monto:</label>
        <input type="number" name="monto" required><br>

        <label for="operacion">Operacion:</label>
        <select name="operacion" required>
            <option value="depositar">Depositar</option>
            <option value="retirar">Retirar</option>
            <option value="consultar">Consultar Saldo</option>
        </select><br>

        <input type="submit" value="Realizar Operacion">
    </form>

    <?php if (isset($mensaje)): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>
</body>
</html>
