<?php

$b = 7;
$andi = 154000;

if($andi >= 100000) {
   $hitung = $andi * 0.07;
   $apaaja = $andi - $b;
}else {
    $apaaja = $andi;
}

echo "andi harus bayar" . $apaaja;

?>