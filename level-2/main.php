<?php
require "Calculable.php";
require "Shape.php";
require "Circulo.php";
require "Rectangulo.php";
require "Triangulo.php";

$circulo1 = new Circulo (23);
$rectangulo1 = new Rectangulo (12 , 5);
$triangulo1 = new Triangulo (17 , 33);

$circulo1 -> setRadio (47);
$rectangulo1 -> setAlto (2);
$triangulo1 -> setAncho (26);

echo "\n" . $circulo1 -> getRadio ();
echo "\n" . $rectangulo1 -> getAlto ();
echo "\n" . $triangulo1 -> getAncho ();

echo "\n" . $circulo1 -> calcularArea ();
echo "\n" . $rectangulo1 -> calcularArea ();
echo "\n" . $triangulo1 -> calcularArea ();

?> 