<?php

// $a = 90;
// $b = 74;

// if ($a >= 90) {
//     echo "Predikat A";
// }elseif($b >= 75){
//     echo "Predikat B";
// }else{
//     echo "Predikat C";
// }

$a = 80;

$ab = $a >= 90 ? "Predikat A" : ($a >= 75 ? "predikat b" : "c");
echo $ab;