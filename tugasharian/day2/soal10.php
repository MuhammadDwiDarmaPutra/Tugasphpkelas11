<?php 

$belanja = 150000;
$voucher = 10000;
$permen = '1 bungkus permen kaki';

if ($belanja > 100000 && $belanja < 150000) {
    $Voucher = $belanja - $voucher;
    echo "Total :" . $Voucher;
}elseif($belanja >= 150000){
    $Voucher = ($belanja - $voucher);
    echo "Total :" . $Voucher . " dan bonus " . $permen;
}else{
    echo "tidak mendapatkan voucher";
}


?>