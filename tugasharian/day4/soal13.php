<?php

$data = [
    ['nama' => 'Andi', 'tahun' => '2008'],
    ['nama' => 'Beni', 'tahun' => '2001'],
    ['nama' => 'Dani', 'tahun' => '2004'],
    ['nama' => 'Eko', 'tahun' => '2006'],
];

echo "Orang yang lahir ditahun kabisat :<br>";

foreach ($data as $key) {
    $tahun = (int)$key['tahun'];

    if ($tahun %4 == 0 && ($tahun % 100 != 0 || $tahun % 400 == 0)){
        echo $key['nama'] . "<br>";
    }
}
?>