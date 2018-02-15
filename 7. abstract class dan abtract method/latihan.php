<?php
// buat abstract class
abstract class komponen_komputer{
   // buat abstract method
	//Tetapi hanya Menulis SIGNATURE nya saja
   abstract public function lihat_spec();
   abstract public function lihat_processor();
   abstract public function lihat_harddisk();
   abstract public function lihat_pemilik();

   // jika method biasa tidak perluh diturunkan
   public function lihat_saja(){
   	echo "hahahah";
   }
}
  
class laptop extends komponen_komputer{
   public function lihat_spec(){
   	echo "Spesifikasi Laptop";
   }
   public function lihat_processor(){
   	echo "Prosesor Laptop";
   }
   public function lihat_harddisk(){
   	echo "Harddisk Laptop";
   }
   public function lihat_pemilik(){
   	echo "Pemilik Laptop";
   }
   // public function lihat_saja();
}
  
class pc extends komponen_komputer{
   public function lihat_spec(){
   	echo "Spesifikasi PC";
   }
   public function lihat_processor(){
   	echo "Prosesor PC";
   }
   public function lihat_harddisk(){
   	echo "Harddisk PC";
   }
   public function lihat_pemilik(){
   	echo "Pemilik PC";
   }
   // public function lihat_saja();
}
  
class netbook extends komponen_komputer{
   public function lihat_spec(){
   	echo "Spesifikasi Netbook";
   }
   public function lihat_processor(){
   	echo "Prosesor Netbook";
   }
   public function lihat_harddisk(){
   	echo "Harddisk Netbook";
   }
   public function lihat_pemilik(){
   	echo "Pemilik Netbook";
   }
   // public function lihat_saja();
}

$laptopHadi = new laptop();
$pcHadi = new pc();
$netbookHadi = new netbook();

echo $laptopHadi->lihat_spec();
echo "<br>";
echo $pcHadi->lihat_spec();
echo "<br>";
echo $netbookHadi->lihat_spec();


?>