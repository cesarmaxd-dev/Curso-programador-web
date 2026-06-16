<?php
$c = readline ("Digite os Celsius: ");
$Fahhhh =readline ("Digite os Fahrenheit: ");

$conversaoC = ($Fahhhh - 32) / 1.8;
$conversaoF = ($c - 32) / 1.8;

echo "Fahrenheit para Celsius: " . $conversaoC . "°C\n";
echo "Celsius para Fahrenheit: " . $conversaoF . "°F\n";
?>