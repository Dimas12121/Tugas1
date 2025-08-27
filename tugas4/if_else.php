<?php
echo "=== Struktur Kontrol If/Else ===<br>";

$nilai = 75;

if ($nilai >= 90) {
    echo "Nilai A<br>";
} elseif ($nilai >= 75) {
    echo "Nilai B<br>";
} elseif ($nilai >= 60) {
    echo "Nilai C<br>";
} else {
    echo "Nilai D<br>";
}