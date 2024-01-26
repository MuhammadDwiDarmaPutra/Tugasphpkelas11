<?php

// $day = date('D');

// if($day == 'Mon'){
//     echo "maka hari ini upacara";
// }else{
//     echo "tidak upacara";
// }

$day = date('D');
$upacara = $day == 'Wed' ? "maka hari ini tidak upacara" : "hari ini upacara";
echo $upacara;
?>