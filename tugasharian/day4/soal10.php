<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

$totalHarga = 0;

foreach ($barang as $item) {
    $harga_barang = $item['harga_barang'];
    $jumlah_beli = $item['jumlah_beli'];

    $totalHarga += $harga_barang * $jumlah_beli;

    echo "Nama Barang: " . $item['nama_barang'] . "<br>";
    echo "Harga Barang: " . $harga_barang . "<br>";
    echo "Jumlah Beli: " . $jumlah_beli . "<br><br>";
}

echo "Total Harga: " . $totalHarga . "<br>";
