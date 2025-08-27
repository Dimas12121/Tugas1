<?php
echo "=== Struktur Kontrol Switch ===<br>";

$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini Senin, semangat kerja!<br>";
        break;
    case "Selasa":
        echo "Hari ini Selasa, tetap semangat!<br>";
        break;
    case "Rabu":
        echo "Hari ini Rabu, lanjut terus!<br>";
        break;
    default:
        echo "Hari libur, saatnya istirahat.<br>";
}
?>
