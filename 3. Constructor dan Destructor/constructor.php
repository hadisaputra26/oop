<?php
// buat class laptop
class laptop {
 
   private $pemilik_1;
   private $merek_1;
 
   // constructor sebagai pembuat nilai awal
   public function __construct($pemilik, $merk) {
   	// Memasukan Nilai Argumen/parameter kedalam Property
     $this->pemilik_1 = $pemilik;
     $this->merek_1 = $merk;
     // Perintahnya sama saja dengan ini
    	 // private $pemilik_1 = $pemilik;
   	  	 // private $merek_1 = $merk;
   }
 
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->merek_1 punya $this->pemilik_1";
   }
}
 
// buat objek dari class laptop (instansiasi)
$laptop_andi= new laptop("Andi", "Lenovo");
 
echo $laptop_andi->hidupkan_laptop();
echo "<br />";
 
$laptop_anto= new laptop("Anto", "Acer");
 
echo $laptop_anto->hidupkan_laptop();
?>