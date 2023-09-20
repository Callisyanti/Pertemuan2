<?php
include 'variable.php';

// Gunakan variabel yang didefinisikan di variabel.php
echo "Nama : " . $nama . "<br>";
echo "Umur : " . $umur . "<br>";

// Gunakan operator pada variabel
$umurSetahunLalu = $umur - 1;
echo " Umur satu tahun lalu : " . $umurSetahunLalu . " tahun <br>";

$umurTahunDepan = $umur + 1 ;
echo " Umur tahun depan : " . $umurTahunDepan . " tahun <br>";
?>