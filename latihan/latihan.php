<?php 

class matematika {
  public $nilai1 = 20;
  public $nilai2 = 40;

  function perkalian(){
    $n1 = $this->nilai1;
    $n2 = $this->nilai2;
    $hasil = $n1+$n2;
    $nama = "Hadi";
    $x = $hasil && $nama;
    return $x;
    // return $this->nilai1*$this->nilai2;
  }
}

$hasilnya = new matematika();

echo "Hasilnya Adalah ";
echo "<br>";
var_dump($hasilnya->perkalian());
die;
echo $hasilnya->perkalian();

 ?>