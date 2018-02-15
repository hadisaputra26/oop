<?php
// buat class laptop
class laptop {
 
   private $pemilik = "Andi";
   private $merk = "Lenovo";
  
  // Constructor
   public function __construct(){
     echo "Ini berasal dari Constructor Laptop";
   }
  // Destructor
   public function __destruct(){
     echo "Ini berasal dari Destructor Laptop";
   }

   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
 
   }
}
 
// buat objek dari class laptop (instansiasi)
$laptop_andi= new laptop();
 
echo "<br />";
echo $laptop_andi->hidupkan_laptop();
echo "<br />";
 
 
echo "function 02";
echo "<br />";
echo "function 03";
echo "<br />";
echo "function 04";
echo "<br />";
echo "function 07";
echo "<br />";
echo "function 08";
echo "<br />";
echo "function 09";
echo "<br />";

// hapus objek $laptop_andi
unset($laptop_andi);
echo "<br />";
echo "Object Telah Di Hapus";

?>