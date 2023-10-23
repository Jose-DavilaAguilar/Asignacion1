<?php
/* Clase base Forma*/
class Forma {
    /* Metodo para calcular el area (metodo abstracto que debe ser implementado por las clases derivadas)*/
    public function calcularArea() {
        /* Metodo abstracto para calcular el area*/
    }
}

/* Clase derivada Circulo que hereda de Forma*/
class Circulo extends Forma {
    private $radio;

    /* Constructor para inicializar el radio del circulo*/
    public function __construct($radio) {
        $this->radio = $radio;
    }

    /* Implementacion del metodo abstracto para calcular el area del circulo*/
    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

/* Clase derivada Rectangulo que hereda de Forma*/
class Rectangulo extends Forma {
    private $base;
    private $altura;

    /* Constructor para inicializar la base y la altura del rectangulo*/
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    /* Implementacion del metodo abstracto para calcular el area del rectangulo*/
    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

/* Ejemplo de uso*/
$circulo = new Circulo(8);
echo "Area del circulo: " . $circulo->calcularArea() . "<br>";

$rectangulo = new Rectangulo(2, 9);
echo "Area del rectangulo: " . $rectangulo->calcularArea();
?>
