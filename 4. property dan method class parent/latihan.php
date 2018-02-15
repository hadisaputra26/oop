<?php
// buat class komputer
class komputer {
  
   public function lihat_spec() {
     return "Spec Komputer: Acer, 
     Processor Intel core i7, Ram 4GB";
   }
}
  
// turunkan class komputer ke laptop
class laptop extends komputer {
  
   public function lihat_spec() {
     return "Spec Laptop: Asus, 
     Processor Intel core i5, Ram 2GB";
   }
    
   public function lihat_spec_komputer() {
    return parent::lihat_spec();
   }

   public function lihat_spec_komputer_semua() {
    $satu = parent::lihat_spec();
    $dua= "Spec Laptop: Asus, 
     Processor Intel core i5, Ram 2GB";
     $tiga = "Parent Class : ".$satu."<br> Child Class : ".$dua;
     return $tiga;
   }
}
// buat objek dari class laptop (instansiasi)
$gadget_baru = new laptop();
  
//panggil method lihat_spec()
echo "Dari function lihat_spec()";
echo "<br />";
echo "Child Class : ".$gadget_baru->lihat_spec();
echo "<br />";
echo "<br />";
echo "Dari function lihat_spec_komputer()";
echo "<br />";
echo "Parent Class : ".$gadget_baru->lihat_spec_komputer();
echo "<br />";
echo "<br />";
echo "Dari function lihat_spec_komputer_semua()";
echo "<br />";
echo $gadget_baru->lihat_spec_komputer_semua();
?>