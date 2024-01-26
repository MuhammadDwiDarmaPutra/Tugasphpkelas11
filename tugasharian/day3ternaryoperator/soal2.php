<?php

$jam = "19:00";
$jam_formatted = (date("H:i a", strtotime($jam)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($jam));

$jam1 = "08:55";
$jam1_formatted = (date("H:i a", strtotime($jam1)) == "00:00 am") ? "12:00 am" : date("h:i a", strtotime($jam1));


echo "Waktu 1: " . $jam_formatted . "<br>";
echo "Waktu 2: " . $jam1_formatted . "<br>";
?>