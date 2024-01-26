<?php
$count = 0;

for ($i = 5; $i <= 25; $i += 5) {
    if (225 % $i == 0) {
        $count++;
    }
}

echo "Billangan 225 dapat dibagi habis oleh kelipatan 5 sebanyak $count kali.";
?>
