<?php
$nilai = 6;
$predikat = $nilai > 8 ? 'Sangat Baik' : ($nilai >= 7 && $nilai <=8 ? 'Baik' : ($nilai <= 6 && $nilai > 5 ? 'sedang' : 'Kurang'));
echo $predikat;
?>