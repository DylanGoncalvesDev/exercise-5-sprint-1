<?php
require "Shape.php";
require "Rectangulo.php";
require "Triangulo.php";

$rectangulo1 = new Rectangulo (66, 9);
$triangulo1 = new Triangulo (45, 110);

$rectangulo1 -> setAncho (37);
$triangulo1  -> setAlto (12);

echo "\n" . $rectangulo1 -> getAncho ();
echo "\n" . $triangulo1 -> getAlto ();

echo "\n" . $rectangulo1 -> calcularArea ();
echo "\n" . $triangulo1 -> calcularArea ();

?> 