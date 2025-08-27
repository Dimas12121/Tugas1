<?php
echo "=== Perulangan For ===<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}

echo "<br>=== Perulangan While ===<br>";
$j = 1;
while ($j <= 5) {
    echo "While ke-$j <br>";
    $j++;
}

echo "<br>=== Perulangan Do While ===<br>";
$k = 1;
do {
    echo "Do-While ke-$k <br>";
    $k++;
} while ($k <= 5);
?>
