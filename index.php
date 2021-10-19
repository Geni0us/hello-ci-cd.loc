<?php

require_once "Something.php";

$somebody1 = new Somebody("Peter");
$somebody2 = new Somebody("John");

echo Somebody::sayHello() . " " . $somebody1->introduce();
echo "<br>";
echo Somebody::sayHello() . " " . $somebody2->introduce();

