<?php

$andi = 2004;
$eko = $andi - 3;

if ($andi %4 == 0 && $eko %4 == 0) {
    echo "keduanya lahir di tahun kabisat";
}elseif($andi %4 == 0) {
    echo "andi lahir di tahun kabisat";
}elseif($eko %4 == 0) {
    echo "eko lahir di tahun kabisat";
}else{
    echo "keduanya tidak lahir di tahun kabisat";
}