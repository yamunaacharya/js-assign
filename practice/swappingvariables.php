<!-- write a PHP script that swaps the value of two variables without using a temporary variable. -->
<?php
$a = 1;
$b = 2;
echo "Before swapping: a = $a, b = $b\n";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "After swapping: a = $a, b = $b\n";

?>