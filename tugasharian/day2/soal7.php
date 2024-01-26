<?php

$NasiGoreng = 15000;
$AyamBakar = 20000;
$NasiKebuli = 25000;
$beli = $NasiKebuli * 2 + $AyamBakar + $NasiGoreng * 2;
$day = Date('D');

if($day == 'Monday') {
    $harga = $beli * 0.02;
    echo "dani mendapat diskon sebesar $harga";
}elseif($day == 'Fri'){
    $harga = $beli * 0.05;
    echo "dani mendapat diskon sebesar $harga";
}else{
    echo '0%';
}

// $hari = $day == 'monday' ? $harga : ($day == 'friday' ? $harga : '0%');
// echo $hari;