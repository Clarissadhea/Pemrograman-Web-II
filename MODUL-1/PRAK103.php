<?php
$celcius = 37.841;

$fahrenheit = ($celcius * 9/5) + 32;
$raemur = $celcius * 4/5;
$kelvin = $celcius + 273.15;

echo "Fahrenheit (F) = " . number_format($fahrenheit, 4, ',', '.') . "<br>";
echo "Raemur (R) = " . number_format($raemur, 4, ',', '.') . "<br>";
echo "Kelvin (K) = " . number_format($kelvin, 3, ',', '.') . "<br>";
?>