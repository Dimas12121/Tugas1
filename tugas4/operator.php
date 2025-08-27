<?php
echo "=== Operator Perbandingan & Logika ===<br>";

$a = 10;
$b = 5;

echo "\$a = $a, \$b = $b <br><br>";

// Operator perbandingan
echo "Apakah a == b? "; var_dump($a == $b); echo "<br>";
echo "Apakah a != b? "; var_dump($a != $b); echo "<br>";
echo "Apakah a > b? "; var_dump($a > $b); echo "<br>";
echo "Apakah a < b? "; var_dump($a < $b); echo "<br>";
echo "Apakah a >= b? "; var_dump($a >= $b); echo "<br>";
echo "Apakah a <= b? "; var_dump($a <= $b); echo "<br><br>";

// Operator logika
$x = true;
$y = false;

echo "x AND y: "; var_dump($x && $y); echo "<br>";
echo "x OR y: "; var_dump($x || $y); echo "<br>";
echo "NOT x: "; var_dump(!$x); echo "<br>";
?>
