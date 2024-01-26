<?php

function translate($tanggal) {
    $day = date('l', strtotime($tanggal));
    // Mengonversi nama hari ke dalam bahasa Indonesia
    if ($day == 'Monday') {
        echo 'Senin';
    } elseif ($day == 'Tuesday') {
        echo 'Selasa';
    } elseif ($day == 'Wednesday') {
        echo 'Rabu';
    } elseif ($day == 'Thursday') {
        echo 'Kamis';
    } elseif ($day == 'Friday') {
        echo 'Jumat';
    } elseif ($day == 'Saturday') {
        echo 'Sabtu';   
    }else {
        // Jika nama hari tidak ditemukan, kembalikan input asli
        echo 'Minggu';
    }
}

// Contoh penggunaan
return translate('2024-01-25')

?>