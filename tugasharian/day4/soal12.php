<?php

$barang = [
    ['nama' => 'Ban, ','diskon' => 10],
    [ 'nama' => 'oli mesin'],
    [ 'nama' => 'kampas rem'],
    [ 'nama' => 'Busi, ', 'diskon' => 9],
    [ 'nama' => 'Akumulator, ', 'diskon' => 7],
];

$barangDenganDiskon = [];

foreach ($barang as $key) {
    if (isset($key['diskon'])) {
        $barangDenganDiskon[] = $key;
    }
}
echo "Barang Dengan Diskon :<br>";

foreach ($barangDenganDiskon as $key) {
    echo "<br> Nama :" . $key['nama'];
    if (isset($key['diskon'])) {
        echo "Diskon :" . $key['diskon'];
    }
    echo "<br>";
}
?>