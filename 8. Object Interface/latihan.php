<?php
interface mouse{
   public function klik_kanan();
   public function klik_kiri();
}
  
interface keyboard{
   public function tekan_enter();
}
  
class laptop implements mouse, keyboard{
   public function klik_kanan(){
     return "Klik Kanan...";
   }
  
   public function klik_kiri(){
     return "Klik Kiri...";
   }
  
   public function tekan_enter(){
     return "Tekan Tombol Enter...";
   }
}
  
$laptop_baru = new laptop();
echo $laptop_baru->tekan_enter();
// Tekan Tombol Enter...
?>