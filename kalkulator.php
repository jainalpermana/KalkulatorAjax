<?php
header('Content-Type: text/xml');

$bil1 = $_GET['bil1'];
$bil2 = $_GET['bil2'];
$op   = $_GET['op'];

echo '<output>';
if ($op == "penjumlahan") $hasil = $bil1 + $bil2;
else if ($op == "pengurangan") $hasil = $bil1 - $bil2;
else if ($op == "perkalian") $hasil = $bil1 * $bil2;
else if ($op == "pembagian")
     { 
	 if ($bil2 == 0) $hasil = "(ERROR) Divide by zero";
	 else $hasil = $bil1 / $bil2;
     }
echo "Hasil perhitungannya adalah : ". $hasil;
echo '</output>';
?>
