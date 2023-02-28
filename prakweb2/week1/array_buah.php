<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];

echo "Ini adalah hasil data buah dalam array";

// Cetak Buah Dengan Index Ke 2
echo "<br/> Ini Buah Index Ke 2 - $ar_buah[2]";

// Cetak Total Buah
echo '<br/> Total Buah adalah ' .count($ar_buah);

// Cetak Seluruh Data Array Buah
echo "<hr/>Ini adalah List Dalam Data Array Buah";
echo "<ul>";
foreach ($ar_buah as $buah ) {
    echo "<li> $buah </li>";
}
echo "</ul>";

// Tambahkan Buah
$ar_buah[] = "Durian";

// Hapus Buah
unset($ar_buah[1]);

// Ubah Buah Index Ke 2
$ar_buah[2] = "Manggis";

echo "<hr/>Ini adalah List Dalam Data Array Buah Yang di Ubah";
echo "<ul>";
foreach ($ar_buah as $buah ) {
    echo "<li> $buah </li>";
}
echo "</ul>";
?>