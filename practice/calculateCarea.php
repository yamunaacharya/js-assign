<?php
function calculateCircleArea($radius) {
    if ($radius < 0) {
        return "Radius cannot be negative.";
    }
    $area = pi() * pow($radius, 2); // Area formula: πr²
    return round($area, 2); 
}

$testRadii = [1, 3, 5.5, -2, 8];

foreach ($testRadii as $radius) {
    echo "Radius: $radius, Area: " . calculateCircleArea($radius) . "<br>";
}
?>
