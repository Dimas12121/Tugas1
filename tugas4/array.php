<?php
echo "=== Array Numerik ===<br>";
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo $b . "<br>";
}

echo "<br>=== Array Asosiatif ===<br>";
$mhs = ["nama" => "Adit", "umur" => 20, "jurusan" => "TI"];
foreach ($mhs as $key => $val) {
    echo $key . ": " . $val . "<br>";
}

echo "<br>=== Array Multidimensi ===<br>";
$kelas = [
    ["nama" => "Budi", "nilai" => 80],
    ["nama" => "Siti", "nilai" => 90],
    ["nama" => "Andi", "nilai" => 70],
];

foreach ($kelas as $siswa) {
    echo $siswa["nama"] . " - Nilai: " . $siswa["nilai"] . "<br>";
}
?>
