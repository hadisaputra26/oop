<?php 

require 'class.php';

$nilaiHadi = new nilaiAkhir();
$nilaiTika = new class2();

$nilaiHadi->nama = "Hadi Saputra";
$nilaiHadi->nim = "12.01.0987";

echo "Nama : ".$nilaiHadi->nama;
echo "<br>";
echo "NIM : ".$nilaiHadi->nim;
echo "<br>";
// diambil dari Class nilaiAkhir
echo "Nilai Hadi Adalah : ".$nilaiHadi->nilaiR();
echo "<br>";
echo "Nilai Akhir Hadi Adalah : ".$nilaiHadi->statusN();
echo "<br>";
// diambil dari class class2
echo "Nilai Tika Adalah : ".$nilaiTika->nilai2();


 ?>