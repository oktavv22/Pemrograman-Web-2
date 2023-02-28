<?php
// Definisikan Variable Konstanta
define ('PHI', 3.14);

// Soal Hitung Luas Lingkaran Dengan Jari2
// Soal 2 Hitung Kelilingnya

// Definisikan Nilai Jari2
$jari = 8;
// Hitung Nilai Luas
$luas = PHI * $jari * $jari;
// Hitung Nilai Keliling
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan jari jari ' .$jari. ' = ' .$luas;
echo '<br/> Kelilingnya : ' .$kll
?>