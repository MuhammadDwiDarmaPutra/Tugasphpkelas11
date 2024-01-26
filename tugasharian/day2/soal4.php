<?php

$Jamkerjanormal = 8;
$Tarif = 30000;
$jamlembur = 6;

if ($Jamkerjanormal >= 8){
    $kompensasi = $jamlembur * $Tarif;
    echo "Mendapatkan kompensasi sebesar" . $kompensasi;
}else{
    echo "tidak mendapatkan kompensasi";
} 