<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompokSama = [];
$kelompokTersisa = [];

foreach ($bil1 as $bil) {
    if (in_array($bil, $bil2)) {
        $kelompokSama[] = $bil;
    } else {
        $kelompokTersisa[] = $bil;
    }
}

foreach ($bil2 as $bil) {
    if (!in_array($bil, $bil1)) {
        $kelompokTersisa[] = $bil;
    }
}

echo "Kelompok yang terdapat di kedua variabel: " . implode(', ', $kelompokSama) . "<br>";
echo "Kelompok yang hanya terdapat di salah satu variabel: " . implode(', ', $kelompokTersisa) . "<br>";
