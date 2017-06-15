<?php

require_once ("class/Car.php");
require_once ("class/Motorcycle.php");

$ferrari = new Car("ferrari", "blue");
$ferrari->engine = 300;
$ferrari->setDoors(4);

var_dump($ferrari);
echo "<br><br>";


$mustang = new Car("mustang", "red");
$mustang->engine = 500;
$mustang->setDoors(5);

var_dump($mustang);

echo $mustang->getEngine("powerhorse");
echo "<br><br>";


$m = new Motorcycle("honda", "green");
$m->engine = 50;

var_dump($m);
echo "<br><br>";

