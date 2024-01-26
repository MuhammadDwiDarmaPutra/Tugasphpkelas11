<?php

function berat_badan($berat, $tinggi) {
    $total = $berat / (($tinggi/100) ** 2);
    
    if ($total < 18.5) {
        return "Kurang";
    } elseif ($total >= 18.5 && $total <= 22.9) {
        return "Normal";
    } elseif ($total > 22.9 && $total <= 24.9) {
        return "Berat badan lebih";
    } elseif ($total >= 25) {
        return "Obesitas";
    }
}

$a = 49;
$b = 150;

$c = berat_badan($a, $b);
echo $c;

?>
