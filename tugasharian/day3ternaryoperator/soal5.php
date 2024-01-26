<?php

$kehadiran = 100;


$persentase = $kehadiran == 100 ? "tidak berkurang" : ($kehadiran == 97 ? "Sakit dan izin 3%" : ($kehadiran == 95 ? "Alfa 5%" : "")); 
echo $persentase;

?>