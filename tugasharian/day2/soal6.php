<?php

$a = 44;
$b = 148;
$c = $a / (($b/100) ** 2);

if($c < 18.5) {
    echo "Kurang";
}elseif($c >= 18.5 && $c <= 22.9) {
    echo "Normal";
}elseif($c > 22.9 && $c <= 24.9) {
    echo "Berat badan lebih";
}elseif($c >= 25) {
    echo "Obesitas";
}