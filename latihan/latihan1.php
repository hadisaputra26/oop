<?php 
  
abstract class komputer {
  abstract public function spesifikasi();
}

interface mouse {
  public function klik();
}

class pc extends komputer implements mouse {
  public function spesifikasi(){
    return "Spesifikasi PC";
  }
  public function klik(){
    return "Double Klik Mouse PC";
  }
}

class laptop extends komputer implements mouse {
  public function spesifikasi(){
    return "Spesifikasi Laptop";
  }
  public function klik(){
    return "Double Klik Mouse Laptop";
  }
}

$pcHadi = new pc();
$laptopHadi = new laptop();

function tampilan_spesifikasi($spesifikasi){
  return $spesifikasi->spesifikasi();
}

function tampilan_klik($klik){
  return $klik->klik();
}

echo tampilan_spesifikasi($pcHadi);
echo "<br>";
echo tampilan_klik($pcHadi);
echo "<br>";
echo "<br>";
echo tampilan_spesifikasi($laptopHadi);
echo "<br>";
echo tampilan_klik($laptopHadi);

?>