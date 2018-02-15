<?php 

require 'class.php';

$nilaiHadi = new nilaiAkhir();

//set property
$nilaiHadi->nama="Hadi Saputra";
$nilaiHadi->nim="12.01.7265";
$nilaiHadi->email="hadisaputra26@gmail.com";
$nilaiHadi->jurusan="Teknik Informatika";

//Menampilkan data
$nilai = $nilaiHadi->nilaiRata(50, 55, 48, 60);
$hasil = $nilaiHadi->hasil($nilai);

echo "Nama Lengkap : ".$nilaiHadi->nama;
echo "<br>";
echo "NIM : ".$nilaiHadi->nim;
echo "<br>";
echo "Email : ".$nilaiHadi->email;
echo "<br>";
echo "Jurusan : ".$nilaiHadi->jurusan;
echo "<br>";
echo "Nilai Akhir : ".$nilai;
echo "<br>";
echo "Anda dinyatakan : ".$hasil." pada semester ini";


 ?>