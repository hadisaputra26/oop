<?php
// buat class komputer
class komputer {

  // properti biasa
  public $namaLengkap;
  // properti dengan static
  public static $nama;

  // method Biasa
  public function namaLengkap(){
    return "Nama Saya Adalah ".$this->namaLengkap;
  }
  // method dengan statis
  public function nama(){
    return "Nama Saya Adalah ".self::$nama;
  }

  public function namaSaja(){
    return "Hanya Mencoba Saja";
  }
}
// membuat objek
$namaHadi = new komputer();

// set properti
$namaHadi->namaLengkap = "Tika Bravani";
komputer::$nama = "Hadi Saputra";

// Menampilkan nilai
echo $namaHadi->namaLengkap;
echo "<br>";
echo "<br>";
echo komputer::$nama;
echo "<br>";
echo "<br>";
echo $namaHadi->namaLengkap();
echo "<br>";
echo "<br>";
echo komputer::nama();
echo "<br>";
echo "<br>";

?>