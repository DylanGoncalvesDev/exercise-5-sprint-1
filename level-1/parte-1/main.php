<?php
require "Animal.php";
require "Perro.php";
require "Gato.php";
require "Leon.php";
require "Ballena.php";

$perro1  =  new Perro ("Scooby Doo");
$gato1  = new Gato ("Tom");
$leon1 = new Leon ("Simba");
$ballena1 = new Ballena ("Moby Dick");

echo $perro1 -> getNombre () . " hace " . $perro1 -> hablar ();
echo "\n" . $gato1 -> getNombre () . " hace " . $gato1 -> hablar ();      
echo "\n" . $leon1 -> getNombre () . " hace " . $leon1 -> hablar ();
echo "\n" . $ballena1 -> getNombre () . " hace " . $ballena1 -> hablar ();

?> 